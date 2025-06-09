<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Capabilities a client may support.
 * Known capabilities are defined here, but this is not a closed set.
 */
class ClientCapabilities
{
    /** @var array<string, mixed>|null */
    public ?array $experimental;
    /** @var array<string, mixed>|null */
    public ?array $sampling;
    /** @var array<string, mixed>|null */
    public ?array $roots;

    /**
     * @param array<string, mixed>|null $experimental
     * @param array<string, mixed>|null $sampling
     * @param array<string, mixed>|null $roots
     */
    public function __construct(?array $experimental = null, ?array $sampling = null, ?array $roots = null)
    {
        $this->experimental = $experimental;
        $this->sampling = $sampling;
        $this->roots = $roots;
    }
}
