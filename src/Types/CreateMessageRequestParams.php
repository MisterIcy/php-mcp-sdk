<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CreateMessageRequestParams extends BaseRequestParams
{
    /** @var SamplingMessage[] */
    public array $messages;
    public ?string $systemPrompt;
    public ?string $includeContext;
    public ?float $temperature;
    public int $maxTokens;
    /** @var string[]|null */
    public ?array $stopSequences;
    /** @var array<string, mixed>|null */
    public ?array $metadata;
    public ?ModelPreferences $modelPreferences;

    /**
     * @param SamplingMessage[] $messages
     * @param int $maxTokens
     * @param string|null $systemPrompt
     * @param string|null $includeContext
     * @param float|null $temperature
     * @param string[]|null $stopSequences
     * @param array<string, mixed>|null $metadata
     * @param ModelPreferences|null $modelPreferences
     */
    public function __construct(
        array $messages,
        int $maxTokens,
        ?string $systemPrompt = null,
        ?string $includeContext = null,
        ?float $temperature = null,
        ?array $stopSequences = null,
        ?array $metadata = null,
        ?ModelPreferences $modelPreferences = null
    ) {
        $this->messages = $messages;
        $this->maxTokens = $maxTokens;
        $this->systemPrompt = $systemPrompt;
        $this->includeContext = $includeContext;
        $this->temperature = $temperature;
        $this->stopSequences = $stopSequences;
        $this->metadata = $metadata;
        $this->modelPreferences = $modelPreferences;
    }
}
