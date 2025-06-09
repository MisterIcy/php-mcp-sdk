<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Result of a completion request (CompleteResult in MCP).
 */
class CompleteResult extends Result
{
    public CompleteResultCompletion $completion;

    public function __construct(CompleteResultCompletion $completion)
    {
        $this->completion = $completion;
    }
}
