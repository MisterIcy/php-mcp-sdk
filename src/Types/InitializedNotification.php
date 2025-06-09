<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Notification sent from the client to the server after initialization has finished.
 */
class InitializedNotification extends JSONRPCNotification
{
    public function __construct()
    {
        parent::__construct('notifications/initialized');
    }
}
