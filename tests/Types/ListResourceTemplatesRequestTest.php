<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListResourceTemplatesRequest;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListResourceTemplatesRequest
 * @covers \McpSdk\Types\PaginatedRequest
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\Cursor
 */
class ListResourceTemplatesRequestTest extends TestCase
{
    public function testWithCursor(): void
    {
        $cursor = new Cursor('abc');
        $req = new ListResourceTemplatesRequest($cursor);
        $this->assertSame('resources/templates/list', $req->method);
        $this->assertSame($cursor, $req->cursor);
    }
    public function testWithoutCursor(): void
    {
        $req = new ListResourceTemplatesRequest();
        $this->assertSame('resources/templates/list', $req->method);
        $this->assertNull($req->cursor);
    }
}
