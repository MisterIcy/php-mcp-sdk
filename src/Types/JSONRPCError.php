<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\RequestId;
use McpSdk\Types\JSONRPCErrorObject;

/**
 * A response to a request that indicates an error occurred.
 */
class JSONRPCError
{
    public string $jsonrpc;
    public RequestId $id;
    public JSONRPCErrorObject $error;

    public function __construct(RequestId $id, JSONRPCErrorObject $error)
    {
        $this->jsonrpc = '2.0';
        $this->id = $id;
        $this->error = $error;
    }
}
