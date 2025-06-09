<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request to set logging level (SetLevelRequest in MCP).
 */

class SetLevelRequest extends Request
{
    public string $method = 'logging/setLevel';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(SetLevelRequestParams $params)
    {
        $this->params = $params;
    }
}
