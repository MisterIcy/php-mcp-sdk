<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\UnsubscribeRequest;

/**
 * @covers \McpSdk\Types\UnsubscribeRequest
 * @covers \McpSdk\Types\Request
 */
class UnsubscribeRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $req = new UnsubscribeRequest('file://foo.txt');
        $this->assertSame('resources/unsubscribe', $req->method);
        $this->assertSame('file://foo.txt', $req->uri);
    }
}
