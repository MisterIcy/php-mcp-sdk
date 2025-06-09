<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of a tool call (CallToolResult in MCP).
 */
class CallToolResult extends Result
{
    /**
     * @var array<int, TextContent|ImageContent|AudioContent|EmbeddedResource>
     */
    public array $content;
    /**
     * @var array<string, mixed>|null
     */
    public ?array $structuredContent;
    public ?bool $isError;

    /**
     * @param array<int, TextContent|ImageContent|AudioContent|EmbeddedResource> $content
     * @param array<string, mixed>|null $structuredContent
     * @param bool|null $isError
     */
    public function __construct(array $content = [], ?array $structuredContent = null, ?bool $isError = null)
    {
        $this->content = $content;
        $this->structuredContent = $structuredContent;
        $this->isError = $isError;
    }
}
