<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\BaseRequestParams;

/**
 * Represents a JSON-RPC request.
 */
class Request
{
    public string $method;
    public ?BaseRequestParams $params;

    public function __construct(string $method, ?BaseRequestParams $params = null)
    {
        $this->method = $method;
        $this->params = $params;
    }
}
