<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Text provided to or from an LLM.
 */
class TextContent
{
    public string $type = 'text';
    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
