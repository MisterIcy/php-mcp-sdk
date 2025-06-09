<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListPromptsRequest;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListPromptsRequest
 * @covers \McpSdk\Types\PaginatedRequest
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\Cursor
 */
class ListPromptsRequestTest extends TestCase
{
    public function testWithCursor(): void
    {
        $cursor = new Cursor('abc');
        $req = new ListPromptsRequest($cursor);
        $this->assertSame('prompts/list', $req->method);
        $this->assertSame($cursor, $req->cursor);
    }
    public function testWithoutCursor(): void
    {
        $req = new ListPromptsRequest();
        $this->assertSame('prompts/list', $req->method);
        $this->assertNull($req->cursor);
    }
}
