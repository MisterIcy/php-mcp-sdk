<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * An image provided to or from an LLM.
 */
class ImageContent
{
    public string $type = 'image';
    public string $data;
    public string $mimeType;

    public function __construct(string $data, string $mimeType)
    {
        $this->data = $data;
        $this->mimeType = $mimeType;
    }
}
