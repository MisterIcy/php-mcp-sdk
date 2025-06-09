<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CallToolRequestParams extends BaseRequestParams
{
    public string $name;
    /** @var array<string, mixed>|null */
    public ?array $arguments;

    /**
     * @param string $name
     * @param array<string, mixed>|null $arguments
     */
    public function __construct(string $name, ?array $arguments = null)
    {
        $this->name = $name;
        $this->arguments = $arguments;
    }
}
