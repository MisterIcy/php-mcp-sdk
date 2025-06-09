<?php

declare(strict_types=1);

namespace McpSdk\Types;

use McpSdk\Types\ProgressToken;

/**
 * Metadata for a request, such as progress token.
 */
class RequestMeta
{
    public ?ProgressToken $progressToken;

    public function __construct(?ProgressToken $progressToken = null)
    {
        $this->progressToken = $progressToken;
    }
}
