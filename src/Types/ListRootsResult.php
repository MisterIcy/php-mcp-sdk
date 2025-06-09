<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of listing available roots.
 */
class ListRootsResult
{
    /** @var Root[] */
    public array $roots;
    /** @var array<string, mixed>|null */
    public ?array $_meta;

    /**
     * @param Root[] $roots
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $roots, ?array $_meta = null)
    {
        $this->roots = $roots;
        $this->_meta = $_meta;
    }
}
