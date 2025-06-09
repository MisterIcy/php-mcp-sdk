<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a root (workspace, project, or context root).
 */
class Root
{
    public string $uri;
    public ?string $name;
    public ?string $description;

    public function __construct(string $uri, ?string $name = null, ?string $description = null)
    {
        $this->uri = $uri;
        $this->name = $name;
        $this->description = $description;
    }
}
