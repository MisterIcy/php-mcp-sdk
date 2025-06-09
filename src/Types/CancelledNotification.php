<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a notification sent to cancel a previously-issued request.
 * Corresponds to CancelledNotification in MCP.
 */

class CancelledNotification extends JSONRPCNotification
{
    public string $method = 'notifications/cancelled';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(CancelledNotificationParams $params)
    {
        $this->params = $params;
    }
}
