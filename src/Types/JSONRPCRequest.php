<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\RequestId;
use McpSdk\Types\Request;

/**
 * A JSON-RPC request that expects a response.
 */
class JSONRPCRequest extends Request
{
    public string $jsonrpc;
    public RequestId $id;

    public function __construct(RequestId $id, string $method, ?BaseRequestParams $params = null)
    {
        parent::__construct($method, $params);
        $this->jsonrpc = '2.0';
        $this->id = $id;
    }
}
