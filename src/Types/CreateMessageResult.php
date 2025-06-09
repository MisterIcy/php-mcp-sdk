<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of LLM message sampling (CreateMessageResult in MCP).
 */
class CreateMessageResult extends Result
{
    public string $model;
    public ?string $stopReason;
    public string $role; // 'user' | 'assistant'
    public TextContent|ImageContent|AudioContent $content;

    public function __construct(
        string $model,
        string $role,
        TextContent|ImageContent|AudioContent $content,
        ?string $stopReason = null
    ) {
        $this->model = $model;
        $this->role = $role;
        $this->content = $content;
        $this->stopReason = $stopReason;
    }
}
