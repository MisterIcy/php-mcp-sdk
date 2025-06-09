<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ToolResult;

/**
 * @covers \McpSdk\Types\ToolResult
 */
class ToolResultTest extends TestCase
{
    public function testProperties(): void
    {
        $result = new ToolResult('mytool', ['output' => 42], 'id123');
        $this->assertSame('mytool', $result->name);
        $this->assertSame(['output' => 42], $result->result);
        $this->assertSame('id123', $result->id);
    }

    public function testIdOptional(): void
    {
        $result = new ToolResult('mytool', 123);
        $this->assertNull($result->id);
    }
}
