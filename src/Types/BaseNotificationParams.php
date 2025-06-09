<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * BaseNotificationParams for MCP notifications (empty, passthrough for metadata).
 */
class BaseNotificationParams
{
    /**
     * @var array<string, mixed>|null
     */
    public ?array $_meta;

    /**
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(?array $_meta = null)
    {
        $this->_meta = $_meta;
    }
}
