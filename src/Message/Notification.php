<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

final class Notification implements JsonRpcMessageInterface 
{
    public function __construct(
        private NonEmptyString $method,
        private ?array $params = null
    ) {
        if (str_starts_with($method->getValue(), 'rpc.')) {
            throw new \InvalidArgumentException(
                'Method names cannot start with "rpc." as it is reserved for internal use.'
            );
        }
    }

    public function getJsonRpcVersion(): string
    {
        return JsonRpcMessageInterface::JSON_RPC_VERSION;
    }

    public function getMethod(): NonEmptyString
    {
        return $this->method;
    }

    public function getParams(): ?array
    {
        return $this->params;
    }

    public function jsonSerialize(): mixed
    {
        $data = [
            'jsonrpc' => $this->getJsonRpcVersion(),
            'method' => $this->method->getValue(),
        ];

        if ($this->params !== null) {
            $data['params'] = $this->params;
        }

        return $data;
    }
}