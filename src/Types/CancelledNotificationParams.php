<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CancelledNotificationParams extends BaseRequestParams
{
    public string|int $requestId;
    public ?string $reason;

    public function __construct(string|int $requestId, ?string $reason = null)
    {
        $this->requestId = $requestId;
        $this->reason = $reason;
    }
}
