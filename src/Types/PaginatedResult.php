<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result for paginated requests.
 */
class PaginatedResult extends Result
{
    public ?Cursor $nextCursor;

    public function __construct(?Cursor $nextCursor = null, ?array $_meta = null)
    {
        parent::__construct($_meta);
        $this->nextCursor = $nextCursor;
    }
}
