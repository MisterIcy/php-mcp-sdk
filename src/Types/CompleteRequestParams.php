<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CompleteRequestParams extends BaseRequestParams
{
    public ResourceReference|PromptReference $ref;
    public CompleteRequestArgument $argument;

    public function __construct(ResourceReference|PromptReference $ref, CompleteRequestArgument $argument)
    {
        $this->ref = $ref;
        $this->argument = $argument;
    }
}
