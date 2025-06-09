<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\Request;

/**
 * A JSON-RPC notification which does not expect a response.
 */
class JSONRPCNotification extends Request
{
    public string $jsonrpc;

    public function __construct(string $method, ?BaseRequestParams $params = null)
    {
        parent::__construct($method, $params);
        $this->jsonrpc = '2.0';
    }
}
