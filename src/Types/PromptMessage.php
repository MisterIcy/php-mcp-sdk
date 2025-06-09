<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Describes a message returned as part of a prompt.
 */
class PromptMessage
{
    public string $role; // 'user' or 'assistant'
    /** @var TextContent|ImageContent|AudioContent|EmbeddedResource */
    public $content;

    /**
     * @param string $role
     * @param TextContent|ImageContent|AudioContent|EmbeddedResource $content
     */
    public function __construct(string $role, $content)
    {
        $this->role = $role;
        $this->content = $content;
    }
}
