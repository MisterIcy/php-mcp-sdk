<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ResourceListChangedNotification extends JSONRPCNotification
{
    public function __construct()
    {
        parent::__construct('notifications/resources/list_changed');
    }
}
