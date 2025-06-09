<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Model hint for model selection (ModelHint in MCP).
 */
class ModelHint
{
    public ?string $name;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }
}
