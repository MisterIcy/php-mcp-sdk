<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\LogEntry;
use McpSdk\Types\LogLevel;

/**
 * @covers \McpSdk\Types\LogEntry
 */
class LogEntryTest extends TestCase
{
    public function testProperties(): void
    {
        $context = ['foo' => 'bar'];
        $timestamp = '2025-06-09T12:00:00Z';
        $entry = new LogEntry(LogLevel::INFO, 'message', $context, $timestamp);
        $this->assertSame(LogLevel::INFO, $entry->level);
        $this->assertSame('message', $entry->message);
        $this->assertSame($context, $entry->context);
        $this->assertSame($timestamp, $entry->timestamp);
    }

    public function testOptionalFields(): void
    {
        $entry = new LogEntry(LogLevel::ERROR, 'fail');
        $this->assertNull($entry->context);
        $this->assertNull($entry->timestamp);
    }
}
