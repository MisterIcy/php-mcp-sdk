<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CreateMessageResult
 * @covers \McpSdk\Types\TextContent
 */
class CreateMessageResultTest extends TestCase
{
    public function testConstruction(): void
    {
        $content = new TextContent('foo');
        $result = new CreateMessageResult('gpt-4', 'assistant', $content, 'stopSequence');
        $this->assertSame('gpt-4', $result->model);
        $this->assertSame('assistant', $result->role);
        $this->assertSame($content, $result->content);
        $this->assertSame('stopSequence', $result->stopReason);
    }
}
