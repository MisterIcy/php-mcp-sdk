<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ToolRequest;
use McpSdk\Types\ToolCall;

/**
 * @covers \McpSdk\Types\ToolRequest
 * @covers \McpSdk\Types\ToolCall
 */
class ToolRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $call = new ToolCall('mytool', ['foo' => 1]);
        $req = new ToolRequest($call);
        $this->assertSame('tools/call', $req->method);
        $this->assertSame('2.0', $req->jsonrpc);
        $this->assertSame($call, $req->call);
    }
}
