<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ToolCall;

/**
 * @covers \McpSdk\Types\ToolCall
 */
class ToolCallTest extends TestCase
{
    public function testProperties(): void
    {
        $args = ['foo' => 1, 'bar' => 'baz'];
        $call = new ToolCall('mytool', $args, 'id123');
        $this->assertSame('mytool', $call->name);
        $this->assertSame($args, $call->arguments);
        $this->assertSame('id123', $call->id);
    }

    public function testIdOptional(): void
    {
        $call = new ToolCall('mytool', []);
        $this->assertNull($call->id);
    }
}
