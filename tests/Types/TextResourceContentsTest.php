<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\TextResourceContents;

/**
 * @covers \McpSdk\Types\TextResourceContents
 * @covers \McpSdk\Types\ResourceContents
 */
class TextResourceContentsTest extends TestCase
{
    public function testProperties(): void
    {
        $trc = new TextResourceContents('file://foo.txt', 'hello world', 'text/plain');
        $this->assertSame('file://foo.txt', $trc->uri);
        $this->assertSame('hello world', $trc->text);
        $this->assertSame('text/plain', $trc->mimeType);
    }
}
