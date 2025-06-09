<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of an autocomplete request.
 */
class AutocompleteResult
{
    /** @var string[] */
    public array $completions;
    /** @var array<string, mixed>|null */
    public ?array $_meta;

    /**
     * @param string[] $completions
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $completions, ?array $_meta = null)
    {
        $this->completions = $completions;
        $this->_meta = $_meta;
    }
}
