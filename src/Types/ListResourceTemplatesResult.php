<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ListResourceTemplatesResult extends PaginatedResult
{
    /** @var ResourceTemplate[] */
    public array $resourceTemplates;

    /**
     * @param ResourceTemplate[] $resourceTemplates
     * @param Cursor|null $nextCursor
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $resourceTemplates, ?Cursor $nextCursor = null, ?array $_meta = null)
    {
        parent::__construct($nextCursor, $_meta);
        $this->resourceTemplates = $resourceTemplates;
    }
}
