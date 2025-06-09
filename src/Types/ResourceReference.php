<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Reference to a resource or template (ResourceReference in MCP).
 */
class ResourceReference
{
    public string $type = 'ref/resource';
    public string $uri;

    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }
}
