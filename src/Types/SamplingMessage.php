<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Message for LLM sampling (SamplingMessage in MCP).
 */
class SamplingMessage
{
    public string $role; // 'user' | 'assistant'
    public TextContent|ImageContent|AudioContent $content;

    public function __construct(string $role, TextContent|ImageContent|AudioContent $content)
    {
        $this->role = $role;
        $this->content = $content;
    }
}
