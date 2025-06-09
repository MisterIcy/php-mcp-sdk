<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ReadResourceResult;
use McpSdk\Types\TextResourceContents;
use McpSdk\Types\BlobResourceContents;

/**
 * @covers \McpSdk\Types\ReadResourceResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\TextResourceContents
 * @covers \McpSdk\Types\BlobResourceContents
 * @covers \McpSdk\Types\ResourceContents
 */
class ReadResourceResultTest extends TestCase
{
    public function testWithContents(): void
    {
        $text = new TextResourceContents('file://foo.txt', 'abc');
        $blob = new BlobResourceContents('file://foo.bin', 'YmFzZTY0');
        $result = new ReadResourceResult([$text, $blob], ['meta' => 1]);
        $this->assertSame([$text, $blob], $result->contents);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
