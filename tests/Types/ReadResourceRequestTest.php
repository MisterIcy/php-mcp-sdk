<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ReadResourceRequest;

/**
 * @covers \McpSdk\Types\ReadResourceRequest
 * @covers \McpSdk\Types\Request
 */
class ReadResourceRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $req = new ReadResourceRequest('file://foo.txt');
        $this->assertSame('resources/read', $req->method);
        $this->assertSame('file://foo.txt', $req->uri);
    }
}
