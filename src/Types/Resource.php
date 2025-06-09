<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A known resource that the server is capable of reading.
 */
class Resource
{
    public string $uri;
    public string $name;
    public ?string $description;
    public ?string $mimeType;

    public function __construct(string $uri, string $name, ?string $description = null, ?string $mimeType = null)
    {
        $this->uri = $uri;
        $this->name = $name;
        $this->description = $description;
        $this->mimeType = $mimeType;
    }
}
