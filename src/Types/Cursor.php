<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * An opaque token used to represent a cursor for pagination.
 */
class Cursor
{
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
