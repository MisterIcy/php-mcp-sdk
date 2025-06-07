<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

final class Notification implements MessageInterface
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
        if (str_starts_with($method->getValue(), 'rpc.')) {
            throw new \RuntimeException('Method names cannot start with "rpc."');
        }
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

    public function getMethod(): NonEmptyString
    {
        return $this->method;
    }
}
