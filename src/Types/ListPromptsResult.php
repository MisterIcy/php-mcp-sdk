<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ListPromptsResult extends PaginatedResult
{
    /** @var Prompt[] */
    public array $prompts;

    /**
     * @param Prompt[] $prompts
     * @param Cursor|null $nextCursor
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $prompts, ?Cursor $nextCursor = null, ?array $_meta = null)
    {
        parent::__construct($nextCursor, $_meta);
        $this->prompts = $prompts;
    }
}
