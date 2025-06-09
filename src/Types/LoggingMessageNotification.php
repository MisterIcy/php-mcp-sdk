<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Notification for a log message (LoggingMessageNotification in MCP).
 */

class LoggingMessageNotification extends JSONRPCNotification
{
    public string $method = 'notifications/message';
    /**
     * @var BaseRequestParams|null
     */
    public ?BaseRequestParams $params;

    public function __construct(LoggingMessageNotificationParams $params)
    {
        $this->params = $params;
    }
}
