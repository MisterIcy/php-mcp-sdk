<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A template description for resources available on the server.
 */
class ResourceTemplate
{
    public string $uriTemplate;
    public string $name;
    public ?string $description;
    public ?string $mimeType;

    public function __construct(string $uriTemplate, string $name, ?string $description = null, ?string $mimeType = null)
    {
        $this->uriTemplate = $uriTemplate;
        $this->name = $name;
        $this->description = $description;
        $this->mimeType = $mimeType;
    }
}
