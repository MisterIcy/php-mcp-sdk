<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

final class Notification extends Message
{
    /**
     * Creates a new JSON-RPC 2.0 notification message.
     *
     * @param NonEmptyString $method The method name to be invoked.
     * @param array<string, mixed> $params The parameters for the notification.
     */
    public function __construct(
        protected NonEmptyString $method,
        private array $params = []
    ) {
        parent::__construct($method);
    }

    /**
     * @return array<string, mixed> The parameters for the notification.
     *
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * Returns the JSON representation of the notification message.
     *
     * @return array<string, mixed> The JSON-RPC 2.0 notification message.
     */
    public function jsonSerialize(): array
    {
        return [
            'jsonrpc' => self::JSON_RPC_VERSION,
            'method' => $this->method->getValue(),
            'params' => $this->params,
        ];
    }
}
