<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\RequestMeta;

/**
 * Base parameters for a request, including optional metadata.
 */
class BaseRequestParams
{
    public ?RequestMeta $_meta;

    public function __construct(?RequestMeta $_meta = null)
    {
        $this->_meta = $_meta;
    }
}
