<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Model preferences for model selection (ModelPreferences in MCP).
 */
class ModelPreferences
{
    /** @var ModelHint[]|null */
    public ?array $hints;
    public ?float $costPriority;
    public ?float $speedPriority;
    public ?float $intelligencePriority;

    /**
     * @param ModelHint[]|null $hints
     * @param float|null $costPriority
     * @param float|null $speedPriority
     * @param float|null $intelligencePriority
     */
    public function __construct(?array $hints = null, ?float $costPriority = null, ?float $speedPriority = null, ?float $intelligencePriority = null)
    {
        $this->hints = $hints;
        $this->costPriority = $costPriority;
        $this->speedPriority = $speedPriority;
        $this->intelligencePriority = $intelligencePriority;
    }
}
