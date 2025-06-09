<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The binary (base64) contents of a resource.
 */
class BlobResourceContents extends ResourceContents
{
    public string $blob;

    public function __construct(string $uri, string $blob, ?string $mimeType = null)
    {
        parent::__construct($uri, $mimeType);
        $this->blob = $blob;
    }
}
