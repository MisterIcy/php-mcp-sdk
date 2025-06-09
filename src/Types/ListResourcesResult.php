<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ListResourcesResult extends PaginatedResult
{
    /** @var Resource[] */
    public array $resources;

    /**
     * @param Resource[] $resources
     * @param Cursor|null $nextCursor
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $resources, ?Cursor $nextCursor = null, ?array $_meta = null)
    {
        parent::__construct($nextCursor, $_meta);
        $this->resources = $resources;
    }
}
