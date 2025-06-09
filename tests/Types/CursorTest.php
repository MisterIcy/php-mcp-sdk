<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\Cursor
 */
class CursorTest extends TestCase
{
    public function testValue(): void
    {
        $cursor = new Cursor('page-1');
        $this->assertSame('page-1', $cursor->value);
    }
}
