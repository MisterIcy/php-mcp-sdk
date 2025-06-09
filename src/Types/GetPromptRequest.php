<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Used by the client to get a prompt provided by the server.
 */
class GetPromptRequest extends Request
{
    public string $name;
    /** @var array<string, string>|null */
    public ?array $arguments;

    /**
     * @param string $name
     * @param array<string, string>|null $arguments
     */
    public function __construct(string $name, ?array $arguments = null)
    {
        parent::__construct('prompts/get');
        $this->name = $name;
        $this->arguments = $arguments;
    }
}
