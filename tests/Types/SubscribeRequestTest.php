<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\SubscribeRequest;

/**
 * @covers \McpSdk\Types\SubscribeRequest
 * @covers \McpSdk\Types\Request
 */
class SubscribeRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $req = new SubscribeRequest('file://foo.txt');
        $this->assertSame('resources/subscribe', $req->method);
        $this->assertSame('file://foo.txt', $req->uri);
    }
}
