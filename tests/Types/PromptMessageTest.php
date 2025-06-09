<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PromptMessage;
use McpSdk\Types\TextContent;
use McpSdk\Types\ImageContent;
use McpSdk\Types\AudioContent;
use McpSdk\Types\EmbeddedResource;
use McpSdk\Types\TextResourceContents;

/**
 * @covers \McpSdk\Types\PromptMessage
 * @covers \McpSdk\Types\TextContent
 * @covers \McpSdk\Types\ImageContent
 * @covers \McpSdk\Types\AudioContent
 * @covers \McpSdk\Types\EmbeddedResource
 * @covers \McpSdk\Types\ResourceContents
 * @covers \McpSdk\Types\TextResourceContents
 */
class PromptMessageTest extends TestCase
{
    public function testTextContent(): void
    {
        $msg = new PromptMessage('user', new TextContent('hi'));
        $this->assertSame('user', $msg->role);
        $this->assertInstanceOf(TextContent::class, $msg->content);
    }
    public function testImageContent(): void
    {
        $msg = new PromptMessage('assistant', new ImageContent('img', 'image/png'));
        $this->assertSame('assistant', $msg->role);
        $this->assertInstanceOf(ImageContent::class, $msg->content);
    }
    public function testAudioContent(): void
    {
        $msg = new PromptMessage('user', new AudioContent('aud', 'audio/wav'));
        $this->assertSame('user', $msg->role);
        $this->assertInstanceOf(AudioContent::class, $msg->content);
    }
    public function testEmbeddedResource(): void
    {
        $er = new EmbeddedResource(new TextResourceContents('file://foo.txt', 'abc'));
        $msg = new PromptMessage('assistant', $er);
        $this->assertSame('assistant', $msg->role);
        $this->assertInstanceOf(EmbeddedResource::class, $msg->content);
    }
}
