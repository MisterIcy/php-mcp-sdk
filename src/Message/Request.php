<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

final class Request implements JsonRpcMessageInterface
{
    public function __construct(
        private NonEmptyString|Number $id,
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

    public function getId(): NonEmptyString|Number
    {
        return $this->id;
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
            'id' => $this->id->getValue(),
            'method' => $this->method->getValue(),
        ];

        if ($this->params !== null) {
            $data['params'] = $this->params;
        }

        return $data;
    }
}
