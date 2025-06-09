<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Capabilities a server may support.
 * Known capabilities are defined here, but this is not a closed set.
 */
class ServerCapabilities
{
    /** @var array<string, mixed>|null */
    public ?array $experimental;
    /** @var array<string, mixed>|null */
    public ?array $logging;
    /** @var array<string, mixed>|null */
    public ?array $completions;
    /** @var array<string, mixed>|null */
    public ?array $prompts;
    /** @var array<string, mixed>|null */
    public ?array $resources;
    /** @var array<string, mixed>|null */
    public ?array $tools;

    /**
     * @param array<string, mixed>|null $experimental
     * @param array<string, mixed>|null $logging
     * @param array<string, mixed>|null $completions
     * @param array<string, mixed>|null $prompts
     * @param array<string, mixed>|null $resources
     * @param array<string, mixed>|null $tools
     */
    public function __construct(
        ?array $experimental = null,
        ?array $logging = null,
        ?array $completions = null,
        ?array $prompts = null,
        ?array $resources = null,
        ?array $tools = null
    ) {
        $this->experimental = $experimental;
        $this->logging = $logging;
        $this->completions = $completions;
        $this->prompts = $prompts;
        $this->resources = $resources;
        $this->tools = $tools;
    }
}
