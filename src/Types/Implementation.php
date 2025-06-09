<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Describes the name and version of an MCP implementation.
 */
class Implementation
{
    public string $name;
    public string $version;

    public function __construct(string $name, string $version)
    {
        $this->name = $name;
        $this->version = $version;
    }
}
