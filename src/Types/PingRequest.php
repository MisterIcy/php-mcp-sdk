<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * A ping request to check if the other party is alive.
 */
class PingRequest extends Request
{
    public function __construct()
    {
        parent::__construct('ping');
    }
}
