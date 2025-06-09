<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A request with optional pagination cursor.
 */
class PaginatedRequest extends Request
{
    public ?Cursor $cursor;

    public function __construct(?Cursor $cursor = null)
    {
        parent::__construct('paginated');
        $this->cursor = $cursor;
    }
}
