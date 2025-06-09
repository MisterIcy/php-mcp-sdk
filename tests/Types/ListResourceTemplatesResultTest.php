<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListResourceTemplatesResult;
use McpSdk\Types\ResourceTemplate;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListResourceTemplatesResult
 * @covers \McpSdk\Types\PaginatedResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\ResourceTemplate
 * @covers \McpSdk\Types\Cursor
 */
class ListResourceTemplatesResultTest extends TestCase
{
    public function testWithTemplates(): void
    {
        $tpl = new ResourceTemplate('file://{id}', 'ID');
        $cursor = new Cursor('next');
        $result = new ListResourceTemplatesResult([$tpl], $cursor, ['meta' => 1]);
        $this->assertSame([$tpl], $result->resourceTemplates);
        $this->assertSame($cursor, $result->nextCursor);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
