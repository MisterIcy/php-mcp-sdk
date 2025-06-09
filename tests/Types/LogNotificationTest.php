<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\LogNotification;
use McpSdk\Types\LogEntry;
use McpSdk\Types\LogLevel;

/**
 * @covers \McpSdk\Types\LogNotification
 * @covers \McpSdk\Types\LogEntry
 */
class LogNotificationTest extends TestCase
{
    public function testProperties(): void
    {
        $entry = new LogEntry(LogLevel::WARNING, 'warn');
        $notif = new LogNotification($entry);
        $this->assertSame('log/entry', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
        $this->assertSame($entry, $notif->entry);
    }
}
