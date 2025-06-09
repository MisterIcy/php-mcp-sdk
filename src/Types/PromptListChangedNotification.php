<?php

declare(strict_types=1);

namespace McpSdk\Types;

class PromptListChangedNotification extends JSONRPCNotification
{
    public function __construct()
    {
        parent::__construct('notifications/prompts/list_changed');
    }
}
