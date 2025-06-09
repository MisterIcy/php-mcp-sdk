<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\InitializeRequest;
use McpSdk\Types\ClientCapabilities;
use McpSdk\Types\Implementation;

/**
 * @covers \McpSdk\Types\InitializeRequest
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\ClientCapabilities
 * @covers \McpSdk\Types\Implementation
 */
class InitializeRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $cap = new ClientCapabilities(['exp' => true]);
        $info = new Implementation('php-sdk', '1.0.0');
        $req = new InitializeRequest('2025-03-26', $cap, $info);
        $this->assertSame('initialize', $req->method);
        $this->assertSame('2025-03-26', $req->protocolVersion);
        $this->assertSame($cap, $req->capabilities);
        $this->assertSame($info, $req->clientInfo);
    }
}
