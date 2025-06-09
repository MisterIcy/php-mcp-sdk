<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of listing available tools.
 */
class ListToolsResult
{
    /** @var array<Tool> */
    public array $tools;
    /** @var array<string, mixed>|null */
    public ?array $_meta;

    /**
     * @param array<Tool> $tools
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $tools, ?array $_meta = null)
    {
        $this->tools = $tools;
        $this->_meta = $_meta;
    }
}
