<?php

declare(strict_types=1);

namespace McpSdk\Types;

class SubscribeRequest extends Request
{
    public string $uri;

    public function __construct(string $uri)
    {
        parent::__construct('resources/subscribe');
        $this->uri = $uri;
    }
}
