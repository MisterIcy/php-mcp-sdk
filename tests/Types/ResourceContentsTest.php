<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ResourceContents;

/**
 * @covers \McpSdk\Types\ResourceContents
 */
class ResourceContentsTest extends TestCase
{
    public function testProperties(): void
    {
        $rc = new ResourceContents('file://foo.txt', 'text/plain');
        $this->assertSame('file://foo.txt', $rc->uri);
        $this->assertSame('text/plain', $rc->mimeType);
    }
    public function testDefaults(): void
    {
        $rc = new ResourceContents('file://bar.txt');
        $this->assertSame('file://bar.txt', $rc->uri);
        $this->assertNull($rc->mimeType);
    }
}
