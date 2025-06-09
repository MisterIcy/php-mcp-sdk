<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ListResourceTemplatesRequest extends PaginatedRequest
{
    public function __construct(?Cursor $cursor = null)
    {
        parent::__construct($cursor);
        $this->method = 'resources/templates/list';
    }
}
