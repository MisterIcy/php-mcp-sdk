<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Progress information for long-running requests.
 */
class Progress
{
    public float $progress;
    public ?float $total;
    public ?string $message;

    public function __construct(float $progress, ?float $total = null, ?string $message = null)
    {
        $this->progress = $progress;
        $this->total = $total;
        $this->message = $message;
    }
}
