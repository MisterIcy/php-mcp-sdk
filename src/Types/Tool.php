<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a tool that can be called by the LLM or client.
 */
class Tool
{
    public string $name;
    public string $description;
    /** @var array<PromptArgument> */
    public array $parameters;

    /**
     * @param string $name
     * @param string $description
     * @param array<PromptArgument> $parameters
     */
    public function __construct(string $name, string $description, array $parameters = [])
    {
        $this->name = $name;
        $this->description = $description;
        $this->parameters = $parameters;
    }
}
