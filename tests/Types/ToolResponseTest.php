<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ToolResponse;
use McpSdk\Types\ToolResult;

/**
 * @covers \McpSdk\Types\ToolResponse
 * @covers \McpSdk\Types\ToolResult
 */
class ToolResponseTest extends TestCase
{
    public function testProperties(): void
    {
        $result = new ToolResult('mytool', 42);
        $meta = ['foo' => 'bar'];
        $resp = new ToolResponse($result, $meta);
        $this->assertSame($result, $resp->result);
        $this->assertSame($meta, $resp->_meta);
    }

    public function testMetaOptional(): void
    {
        $result = new ToolResult('mytool', 42);
        $resp = new ToolResponse($result);
        $this->assertNull($resp->_meta);
    }
}
