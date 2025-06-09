<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request for completion options (CompleteRequest in MCP).
 */

class CompleteRequest extends Request
{
    public string $method = 'completion/complete';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(CompleteRequestParams $params)
    {
        $this->params = $params;
    }
}
