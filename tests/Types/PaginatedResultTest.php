<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PaginatedResult;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\PaginatedResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\Cursor
 */
class PaginatedResultTest extends TestCase
{
    public function testWithCursor(): void
    {
        $cursor = new Cursor('next');
        $result = new PaginatedResult($cursor, ['meta' => 1]);
        $this->assertSame($cursor, $result->nextCursor);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
    public function testWithoutCursor(): void
    {
        $result = new PaginatedResult();
        $this->assertNull($result->nextCursor);
        $this->assertNull($result->_meta);
    }
}
