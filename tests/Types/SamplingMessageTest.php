<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\SamplingMessage
 * @covers \McpSdk\Types\TextContent
 */
class SamplingMessageTest extends TestCase
{
    public function testConstruction(): void
    {
        $content = new TextContent('foo');
        $msg = new SamplingMessage('user', $content);
        $this->assertSame('user', $msg->role);
        $this->assertSame($content, $msg->content);
    }
}
