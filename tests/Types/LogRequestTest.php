<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\LogRequest;
use McpSdk\Types\LogEntry;
use McpSdk\Types\LogLevel;

/**
 * @covers \McpSdk\Types\LogRequest
 * @covers \McpSdk\Types\LogEntry
 */
class LogRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $entry = new LogEntry(LogLevel::DEBUG, 'msg');
        $req = new LogRequest($entry);
        $this->assertSame('log/entry', $req->method);
        $this->assertSame('2.0', $req->jsonrpc);
        $this->assertSame($entry, $req->entry);
    }
}
