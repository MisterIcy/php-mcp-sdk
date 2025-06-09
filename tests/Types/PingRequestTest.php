<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PingRequest;

/**
 * @covers \McpSdk\Types\PingRequest
 * @covers \McpSdk\Types\Request
 */
class PingRequestTest extends TestCase
{
    public function testMethod(): void
    {
        $ping = new PingRequest();
        $this->assertSame('ping', $ping->method);
    }
}
