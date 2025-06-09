<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\BlobResourceContents;

/**
 * @covers \McpSdk\Types\BlobResourceContents
 * @covers \McpSdk\Types\ResourceContents
 */
class BlobResourceContentsTest extends TestCase
{
    public function testProperties(): void
    {
        $brc = new BlobResourceContents('file://foo.bin', 'YmFzZTY0ZGF0YQ==', 'application/octet-stream');
        $this->assertSame('file://foo.bin', $brc->uri);
        $this->assertSame('YmFzZTY0ZGF0YQ==', $brc->blob);
        $this->assertSame('application/octet-stream', $brc->mimeType);
    }
}
