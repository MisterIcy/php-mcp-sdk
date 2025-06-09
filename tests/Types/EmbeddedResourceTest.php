<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\EmbeddedResource;
use McpSdk\Types\TextResourceContents;
use McpSdk\Types\BlobResourceContents;

/**
 * @covers \McpSdk\Types\EmbeddedResource
 * @covers \McpSdk\Types\TextResourceContents
 * @covers \McpSdk\Types\BlobResourceContents
 * @covers \McpSdk\Types\ResourceContents
 */
class EmbeddedResourceTest extends TestCase
{
    public function testTextResource(): void
    {
        $trc = new TextResourceContents('file://foo.txt', 'abc');
        $er = new EmbeddedResource($trc);
        $this->assertSame('resource', $er->type);
        $this->assertSame($trc, $er->resource);
    }
    public function testBlobResource(): void
    {
        $brc = new BlobResourceContents('file://foo.bin', 'YmFzZTY0');
        $er = new EmbeddedResource($brc);
        $this->assertSame('resource', $er->type);
        $this->assertSame($brc, $er->resource);
    }
}
