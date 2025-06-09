<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Reference to a prompt (PromptReference in MCP).
 */
class PromptReference
{
    public string $type = 'ref/prompt';
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
