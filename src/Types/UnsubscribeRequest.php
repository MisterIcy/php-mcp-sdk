<?php

declare(strict_types=1);

namespace McpSdk\Types;

class UnsubscribeRequest extends Request
{
    public string $uri;

    public function __construct(string $uri)
    {
        parent::__construct('resources/unsubscribe');
        $this->uri = $uri;
    }
}
