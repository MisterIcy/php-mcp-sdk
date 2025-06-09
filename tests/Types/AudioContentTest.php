<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\AudioContent;

/**
 * @covers \McpSdk\Types\AudioContent
 */
class AudioContentTest extends TestCase
{
    public function testProperties(): void
    {
        $ac = new AudioContent('base64audio', 'audio/wav');
        $this->assertSame('audio', $ac->type);
        $this->assertSame('base64audio', $ac->data);
        $this->assertSame('audio/wav', $ac->mimeType);
    }
}
