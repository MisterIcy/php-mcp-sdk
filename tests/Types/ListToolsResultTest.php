<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListToolsResult;
use McpSdk\Types\Tool;

/**
 * @covers \McpSdk\Types\ListToolsResult
 * @covers \McpSdk\Types\Tool
 */
class ListToolsResultTest extends TestCase
{
    public function testProperties(): void
    {
        $tools = [new Tool('t1', 'desc1'), new Tool('t2', 'desc2')];
        $meta = ['foo' => 'bar'];
        $result = new ListToolsResult($tools, $meta);
        $this->assertSame($tools, $result->tools);
        $this->assertSame($meta, $result->_meta);
    }

    public function testMetaOptional(): void
    {
        $tools = [new Tool('t1', 'desc1')];
        $result = new ListToolsResult($tools);
        $this->assertNull($result->_meta);
    }
}
