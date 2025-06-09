<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\RequestId;
use McpSdk\Types\Result;

/**
 * A successful (non-error) response to a request.
 */
class JSONRPCResponse
{
    public string $jsonrpc;
    public RequestId $id;
    public Result $result;

    public function __construct(RequestId $id, Result $result)
    {
        $this->jsonrpc = '2.0';
        $this->id = $id;
        $this->result = $result;
    }
}
