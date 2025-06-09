<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to list available roots.
 */
class ListRootsRequest
{
    public string $method = 'roots/list';
    public string $jsonrpc = '2.0';

    public function __construct()
    {
    }
}
