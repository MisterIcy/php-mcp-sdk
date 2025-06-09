<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListResourcesRequest;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListResourcesRequest
 * @covers \McpSdk\Types\PaginatedRequest
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\Cursor
 */
class ListResourcesRequestTest extends TestCase
{
    public function testWithCursor(): void
    {
        $cursor = new Cursor('abc');
        $req = new ListResourcesRequest($cursor);
        $this->assertSame('resources/list', $req->method);
        $this->assertSame($cursor, $req->cursor);
    }
    public function testWithoutCursor(): void
    {
        $req = new ListResourcesRequest();
        $this->assertSame('resources/list', $req->method);
        $this->assertNull($req->cursor);
    }
}
