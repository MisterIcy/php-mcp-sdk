<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Notification for root list changes (RootsListChangedNotification in MCP).
 */

class RootsListChangedNotification extends JSONRPCNotification
{
    public string $method = 'notifications/roots/list_changed';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(?BaseRequestParams $params = null)
    {
        $this->params = $params;
    }
}
