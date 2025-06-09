<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListPromptsResult;
use McpSdk\Types\Prompt;
use McpSdk\Types\Cursor;

/**
 * @covers \McpSdk\Types\ListPromptsResult
 * @covers \McpSdk\Types\PaginatedResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\Prompt
 * @covers \McpSdk\Types\Cursor
 */
class ListPromptsResultTest extends TestCase
{
    public function testWithPrompts(): void
    {
        $prompt = new Prompt('foo');
        $cursor = new Cursor('next');
        $result = new ListPromptsResult([$prompt], $cursor, ['meta' => 1]);
        $this->assertSame([$prompt], $result->prompts);
        $this->assertSame($cursor, $result->nextCursor);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
