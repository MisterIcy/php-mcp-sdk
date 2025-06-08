<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

final class Response implements JsonRpcMessageInterface
{
    public function __construct(
        private NonEmptyString|Number $id,
        private ?Error $error = null,
        private ?array $result = null
    ) {
        if ($error === null && $result === null) {
            throw new \InvalidArgumentException(
                'Either error or result must be provided.'
            );
        }

        if ($error !== null && $result !== null) {
            throw new \InvalidArgumentException(
                'Only one of error or result can be provided.'
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

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function getResult(): ?array
    {
        return $this->result;
    }

    public function jsonSerialize(): mixed
    {
        $data = [
            'jsonrpc' => $this->getJsonRpcVersion(),
            'id' => $this->id->getValue(),
        ];

        if ($this->error !== null) {
            $data['error'] = $this->error->jsonSerialize();
        } elseif ($this->result !== null) {
            $data['result'] = $this->result;
        }

        return $data;
    }
}
