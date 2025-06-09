<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to invoke a tool (CallToolRequest in MCP).
 */

class CallToolRequest extends Request
{
    public string $method = 'tools/call';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(CallToolRequestParams $params)
    {
        $this->params = $params;
    }
}
