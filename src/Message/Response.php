<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\Error;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

final class Response implements MessageInterface
{
    public function __construct(
        private NonEmptyString|Number $id,
        private ?array $result = null,
        private ?Error $error = null
    ) {
        if ($result === null && $error === null) {
            throw new \InvalidArgumentException('Either result or error must be provided.');
        }

        if ($result !== null && $error !== null) {
            throw new \InvalidArgumentException('Only one of result or error can be provided.');
        }
    }

    public function getId(): NonEmptyString|Number
    {
        return $this->id;
    }

    public function getResult(): ?array
    {
        return $this->result;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function jsonSerialize(): array
    {
        $response = [
            'jsonrpc' => self::JSON_RPC_VERSION,
            'id' => $this->id->getValue(),
        ];

        if ($this->result !== null) {
            $response['result'] = $this->result;
        } elseif ($this->error !== null) {
            $response['error'] = [
                'code' => $this->error->getCode()->getValue(),
                'message' => $this->error->getMessage()->getValue(),
                'data' => $this->error->getData(),
            ];
        }

        return $response;
    }
}
