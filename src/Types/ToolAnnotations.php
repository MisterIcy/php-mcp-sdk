<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Tool annotations (hints) for a Tool, per MCP spec.
 */
class ToolAnnotations
{
    public ?string $title;
    public ?bool $readOnlyHint;
    public ?bool $destructiveHint;
    public ?bool $idempotentHint;
    public ?bool $openWorldHint;

    public function __construct(
        ?string $title = null,
        ?bool $readOnlyHint = null,
        ?bool $destructiveHint = null,
        ?bool $idempotentHint = null,
        ?bool $openWorldHint = null
    ) {
        $this->title = $title;
        $this->readOnlyHint = $readOnlyHint;
        $this->destructiveHint = $destructiveHint;
        $this->idempotentHint = $idempotentHint;
        $this->openWorldHint = $openWorldHint;
    }
}
