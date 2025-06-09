<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The server's response to a prompts/get request from the client.
 */
class GetPromptResult extends Result
{
    public ?string $description;
    /** @var PromptMessage[] */
    public array $messages;

    /**
     * @param PromptMessage[] $messages
     * @param string|null $description
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $messages, ?string $description = null, ?array $_meta = null)
    {
        parent::__construct($_meta);
        $this->description = $description;
        $this->messages = $messages;
    }
}
