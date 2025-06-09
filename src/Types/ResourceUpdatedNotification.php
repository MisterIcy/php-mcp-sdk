<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ResourceUpdatedNotification extends JSONRPCNotification
{
    public string $uri;

    public function __construct(string $uri)
    {
        parent::__construct('notifications/resources/updated');
        $this->uri = $uri;
    }
}
