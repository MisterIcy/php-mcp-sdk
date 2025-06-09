<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A progress token, used to associate progress notifications with the original request.
 * Can be a string or integer.
 */
class ProgressToken
{
    public string|int $value;

    public function __construct(string|int $value)
    {
        $this->value = $value;
    }
}
