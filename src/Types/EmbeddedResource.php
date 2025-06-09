<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The contents of a resource, embedded into a prompt or tool call result.
 */
class EmbeddedResource
{
    public string $type = 'resource';
    /** @var TextResourceContents|BlobResourceContents */
    public $resource;

    /**
     * @param TextResourceContents|BlobResourceContents $resource
     */
    public function __construct($resource)
    {
        $this->resource = $resource;
    }
}
