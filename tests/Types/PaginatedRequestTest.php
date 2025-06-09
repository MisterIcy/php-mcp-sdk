<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PaginatedRequest;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\PaginatedRequest
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\Cursor
 */
class PaginatedRequestTest extends TestCase
{
    public function testWithCursor(): void
    {
        $cursor = new Cursor('abc');
        $req = new PaginatedRequest($cursor);
        $this->assertSame('paginated', $req->method);
        $this->assertSame($cursor, $req->cursor);
    }
    public function testWithoutCursor(): void
    {
        $req = new PaginatedRequest();
        $this->assertSame('paginated', $req->method);
        $this->assertNull($req->cursor);
    }
}
