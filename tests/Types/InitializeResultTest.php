<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\InitializeResult;
use McpSdk\Types\ServerCapabilities;
use McpSdk\Types\Implementation;

/**
 * @covers \McpSdk\Types\InitializeResult
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\ServerCapabilities
 * @covers \McpSdk\Types\Implementation
 */
class InitializeResultTest extends TestCase
{
    public function testProperties(): void
    {
        $cap = new ServerCapabilities(['exp' => true]);
        $info = new Implementation('php-server', '2.0.0');
        $result = new InitializeResult('2025-03-26', $cap, $info, 'instructions', ['meta' => 1]);
        $this->assertSame('2025-03-26', $result->protocolVersion);
        $this->assertSame($cap, $result->capabilities);
        $this->assertSame($info, $result->serverInfo);
        $this->assertSame('instructions', $result->instructions);
        $this->assertSame(['meta' => 1], $result->_meta);
    }
}
