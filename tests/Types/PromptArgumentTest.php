<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PromptArgument;

/**
 * @covers \McpSdk\Types\PromptArgument
 */
class PromptArgumentTest extends TestCase
{
    public function testAllProperties(): void
    {
        $arg = new PromptArgument('foo', 'desc', true);
        $this->assertSame('foo', $arg->name);
        $this->assertSame('desc', $arg->description);
        $this->assertTrue($arg->required);
    }
    public function testDefaults(): void
    {
        $arg = new PromptArgument('bar');
        $this->assertSame('bar', $arg->name);
        $this->assertNull($arg->description);
        $this->assertNull($arg->required);
    }
}
