<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ServerCapabilities;

/**
 * @covers \McpSdk\Types\ServerCapabilities
 */
class ServerCapabilitiesTest extends TestCase
{
    public function testAllProperties(): void
    {
        $experimental = ['foo' => true];
        $logging = ['log' => true];
        $completions = ['comp' => 1];
        $prompts = ['prompt' => 'yes'];
        $resources = ['res' => 123];
        $tools = ['tool' => 'abc'];
        $cap = new ServerCapabilities($experimental, $logging, $completions, $prompts, $resources, $tools);
        $this->assertSame($experimental, $cap->experimental);
        $this->assertSame($logging, $cap->logging);
        $this->assertSame($completions, $cap->completions);
        $this->assertSame($prompts, $cap->prompts);
        $this->assertSame($resources, $cap->resources);
        $this->assertSame($tools, $cap->tools);
    }

    public function testDefaults(): void
    {
        $cap = new ServerCapabilities();
        $this->assertNull($cap->experimental);
        $this->assertNull($cap->logging);
        $this->assertNull($cap->completions);
        $this->assertNull($cap->prompts);
        $this->assertNull($cap->resources);
        $this->assertNull($cap->tools);
    }
}
