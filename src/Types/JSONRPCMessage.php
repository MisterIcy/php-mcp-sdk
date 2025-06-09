<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\JSONRPCRequest;
use McpSdk\Types\JSONRPCNotification;
use McpSdk\Types\JSONRPCResponse;
use McpSdk\Types\JSONRPCError;

/**
 * Union type for any JSON-RPC message.
 *
 * @property JSONRPCRequest|JSONRPCNotification|JSONRPCResponse|JSONRPCError $message
 */
class JSONRPCMessage
{
    public JSONRPCRequest|JSONRPCNotification|JSONRPCResponse|JSONRPCError $message;

    public function __construct(JSONRPCRequest|JSONRPCNotification|JSONRPCResponse|JSONRPCError $message)
    {
        $this->message = $message;
    }
}
