<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to sample an LLM message (CreateMessageRequest in MCP).
 */

class CreateMessageRequest extends Request
{
    public string $method = 'sampling/createMessage';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(CreateMessageRequestParams $params)
    {
        $this->params = $params;
    }
}
