<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The text contents of a resource.
 */
class TextResourceContents extends ResourceContents
{
    public string $text;

    public function __construct(string $uri, string $text, ?string $mimeType = null)
    {
        parent::__construct($uri, $mimeType);
        $this->text = $text;
    }
}
