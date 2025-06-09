<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A prompt or prompt template that the server offers.
 */
class Prompt
{
    public string $name;
    public ?string $description;
    /** @var PromptArgument[]|null */
    public ?array $arguments;

    /**
     * @param string $name
     * @param string|null $description
     * @param PromptArgument[]|null $arguments
     */
    public function __construct(string $name, ?string $description = null, ?array $arguments = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->arguments = $arguments;
    }
}
