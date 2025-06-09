<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to list available tools.
 */
class ListToolsRequest
{
    public string $method = 'tools/list';
    public string $jsonrpc = '2.0';

    public function __construct()
    {
    }
}
