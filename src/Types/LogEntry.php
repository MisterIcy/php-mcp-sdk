<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a log entry in the protocol.
 */
class LogEntry
{
    public string $level;
    public string $message;
    /** @var array<string, mixed>|null */
    public ?array $context;
    public ?string $timestamp;

    /**
     * @param string $level
     * @param string $message
     * @param array<string, mixed>|null $context
     * @param string|null $timestamp
     */
    public function __construct(string $level, string $message, ?array $context = null, ?string $timestamp = null)
    {
        $this->level = $level;
        $this->message = $message;
        $this->context = $context;
        $this->timestamp = $timestamp;
    }
}
