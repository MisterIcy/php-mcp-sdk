<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * CompatibilityCallToolResult: CallToolResult or legacy toolResult field (MCP compatibility).
 */
class CompatibilityCallToolResult extends CallToolResult
{
    /**
     * @var mixed|null
     */
    public $toolResult;

    /**
     * @param array<int, TextContent|ImageContent|AudioContent|EmbeddedResource> $content
     * @param array<string, mixed>|null $structuredContent
     * @param bool|null $isError
     * @param mixed|null $toolResult
     */
    public function __construct(array $content = [], ?array $structuredContent = null, ?bool $isError = null, $toolResult = null)
    {
        parent::__construct($content, $structuredContent, $isError);
        $this->toolResult = $toolResult;
    }
}
