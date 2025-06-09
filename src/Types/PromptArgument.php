<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Describes an argument that a prompt can accept.
 */
class PromptArgument
{
    public string $name;
    public ?string $description;
    public ?bool $required;

    public function __construct(string $name, ?string $description = null, ?bool $required = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->required = $required;
    }
}
