<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Notification that the list of tools has changed.
 */
class ToolListChangedNotification
{
    public string $method = 'tools/listChanged';
    public string $jsonrpc = '2.0';

    public function __construct()
    {
    }
}
