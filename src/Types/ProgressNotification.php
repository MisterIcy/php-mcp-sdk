<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Progress notification for long-running requests.
 */
class ProgressNotification extends JSONRPCNotification
{
    public Progress $progress;
    public function __construct(Progress $progress)
    {
        parent::__construct('notifications/progress');
        $this->progress = $progress;
    }
}
