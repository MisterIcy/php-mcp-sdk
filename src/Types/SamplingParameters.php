<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Parameters for controlling sampling in LLMs.
 */
class SamplingParameters
{
    public ?float $temperature;
    public ?float $topP;
    public ?int $maxTokens;
    public ?int $seed;

    public function __construct(?float $temperature = null, ?float $topP = null, ?int $maxTokens = null, ?int $seed = null)
    {
        $this->temperature = $temperature;
        $this->topP = $topP;
        $this->maxTokens = $maxTokens;
        $this->seed = $seed;
    }
}
