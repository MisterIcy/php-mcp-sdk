<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\GetPromptResult;
use McpSdk\Types\PromptMessage;

/**
 * @covers \McpSdk\Types\GetPromptResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\PromptMessage
 * @covers \McpSdk\Types\TextContent
 */
class GetPromptResultTest extends TestCase
{
    public function testWithMessages(): void
    {
        $msg = new PromptMessage('user', new \McpSdk\Types\TextContent('hi'));
        $result = new GetPromptResult([$msg], 'desc', ['meta' => 1]);
        $this->assertSame([$msg], $result->messages);
        $this->assertSame('desc', $result->description);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
