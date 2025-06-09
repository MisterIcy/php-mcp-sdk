<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ClientCapabilities;

/**
 * @covers \McpSdk\Types\ClientCapabilities
 */
class ClientCapabilitiesTest extends TestCase
{
    public function testAllProperties(): void
    {
        $experimental = ['foo' => true];
        $sampling = ['bar' => 1];
        $roots = ['baz' => false];
        $cap = new ClientCapabilities($experimental, $sampling, $roots);
        $this->assertSame($experimental, $cap->experimental);
        $this->assertSame($sampling, $cap->sampling);
        $this->assertSame($roots, $cap->roots);
    }

    public function testDefaults(): void
    {
        $cap = new ClientCapabilities();
        $this->assertNull($cap->experimental);
        $this->assertNull($cap->sampling);
        $this->assertNull($cap->roots);
    }
}
