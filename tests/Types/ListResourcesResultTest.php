<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListResourcesResult;
use McpSdk\Types\Resource;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListResourcesResult
 * @covers \McpSdk\Types\PaginatedResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\Resource
 * @covers \McpSdk\Types\Cursor
 */
class ListResourcesResultTest extends TestCase
{
    public function testWithResources(): void
    {
        $res = new Resource('file://foo', 'Foo');
        $cursor = new Cursor('next');
        $result = new ListResourcesResult([$res], $cursor, ['meta' => 1]);
        $this->assertSame([$res], $result->resources);
        $this->assertSame($cursor, $result->nextCursor);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
