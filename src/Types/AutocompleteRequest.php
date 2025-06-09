<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request for code or text autocompletion.
 */
class AutocompleteRequest
{
    public string $method = 'autocomplete/request';
    public string $jsonrpc = '2.0';
    public string $prompt;
    public ?SamplingParameters $sampling;
    /** @var array<string, mixed>|null */
    public ?array $context;

    /**
     * @param string $prompt
     * @param SamplingParameters|null $sampling
     * @param array<string, mixed>|null $context
     */
    public function __construct(string $prompt, ?SamplingParameters $sampling = null, ?array $context = null)
    {
        $this->prompt = $prompt;
        $this->sampling = $sampling;
        $this->context = $context;
    }
}
