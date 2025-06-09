<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Response/result of a tool call.
 */
class ToolResponse
{
    public ToolResult $result;
    /** @var array<string, mixed>|null */
    public ?array $_meta;

    /**
     * @param ToolResult $result
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(ToolResult $result, ?array $_meta = null)
    {
        $this->result = $result;
        $this->_meta = $_meta;
    }
}
