<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The contents of a specific resource or sub-resource.
 */
class ResourceContents
{
    public string $uri;
    public ?string $mimeType;

    public function __construct(string $uri, ?string $mimeType = null)
    {
        $this->uri = $uri;
        $this->mimeType = $mimeType;
    }
}
