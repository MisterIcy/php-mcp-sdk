<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ListPromptsRequest extends PaginatedRequest
{
    public function __construct(?Cursor $cursor = null)
    {
        parent::__construct($cursor);
        $this->method = 'prompts/list';
    }
}
