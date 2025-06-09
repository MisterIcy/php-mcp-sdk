<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to log a message (from client to server).
 */
class LogRequest
{
    public string $method = 'log/entry';
    public string $jsonrpc = '2.0';
    public LogEntry $entry;

    public function __construct(LogEntry $entry)
    {
        $this->entry = $entry;
    }
}
