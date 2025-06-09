<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a JSON-RPC request ID (string or int).
 */
class RequestId
{
    public string|int $value;

    public function __construct(string|int $value)
    {
        $this->value = $value;
    }
}
