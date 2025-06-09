<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to call a tool.
 */
class ToolRequest
{
    public string $method = 'tools/call';
    public string $jsonrpc = '2.0';
    public ToolCall $call;

    public function __construct(ToolCall $call)
    {
        $this->call = $call;
    }
}
