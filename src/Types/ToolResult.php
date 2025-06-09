<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents the result of a tool call.
 */
class ToolResult
{
    public string $name;
    /** @var mixed */
    public $result;
    public ?string $id;

    /**
     * @param string $name
     * @param mixed $result
     * @param string|null $id
     */
    public function __construct(string $name, $result, ?string $id = null)
    {
        $this->name = $name;
        $this->result = $result;
        $this->id = $id;
    }
}
