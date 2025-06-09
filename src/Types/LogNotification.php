<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Notification for a log entry (from server to client).
 */
class LogNotification
{
    public string $method = 'log/entry';
    public string $jsonrpc = '2.0';
    public LogEntry $entry;

    public function __construct(LogEntry $entry)
    {
        $this->entry = $entry;
    }
}
