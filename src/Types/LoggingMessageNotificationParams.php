<?php

declare(strict_types=1);

namespace McpSdk\Types;

class LoggingMessageNotificationParams extends BaseRequestParams
{
    public string $level;
    public ?string $logger;
    /** @var mixed */
    public $data;

    /**
     * @param string $level
     * @param mixed $data
     * @param string|null $logger
     */
    public function __construct(string $level, $data, ?string $logger = null)
    {
        $this->level = $level;
        $this->data = $data;
        $this->logger = $logger;
    }
}
