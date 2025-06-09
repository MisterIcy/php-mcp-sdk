<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ImageContent;

/**
 * @covers \McpSdk\Types\ImageContent
 */
class ImageContentTest extends TestCase
{
    public function testProperties(): void
    {
        $ic = new ImageContent('base64data', 'image/png');
        $this->assertSame('image', $ic->type);
        $this->assertSame('base64data', $ic->data);
        $this->assertSame('image/png', $ic->mimeType);
    }
}
