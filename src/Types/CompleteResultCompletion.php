<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CompleteResultCompletion
{
    /** @var string[] */
    public array $values;
    public ?int $total;
    public ?bool $hasMore;

    /**
     * @param string[] $values
     * @param int|null $total
     * @param bool|null $hasMore
     */
    public function __construct(array $values, ?int $total = null, ?bool $hasMore = null)
    {
        $this->values = $values;
        $this->total = $total;
        $this->hasMore = $hasMore;
    }
}
