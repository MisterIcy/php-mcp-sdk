<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * An audio provided to or from an LLM.
 */
class AudioContent
{
    public string $type = 'audio';
    public string $data;
    public string $mimeType;

    public function __construct(string $data, string $mimeType)
    {
        $this->data = $data;
        $this->mimeType = $mimeType;
    }
}
