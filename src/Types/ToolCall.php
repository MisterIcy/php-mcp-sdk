<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a call to a tool, including arguments.
 */
class ToolCall
{
    public string $name;
    /** @var array<string, mixed> */
    public array $arguments;
    public ?string $id;

    /**
     * @param string $name
     * @param array<string, mixed> $arguments
     * @param string|null $id
     */
    public function __construct(string $name, array $arguments, ?string $id = null)
    {
        $this->name = $name;
        $this->arguments = $arguments;
        $this->id = $id;
    }
}
