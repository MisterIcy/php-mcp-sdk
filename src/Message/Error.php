<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

final class Error implements \JsonSerializable
{
    private const ERROR_CODE = -32603;

    public function __construct(
        private Number $code,
        private NonEmptyString $message,
        private ?array $data = null
    ) {

    }

    public function getCode(): Number
    {
        return $this->code;
    }

    public function getMessage(): NonEmptyString
    {
        return $this->message;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function jsonSerialize(): mixed
    {
        $data = [
            'code' => $this->code->getValue(),
            'message' => $this->message->getValue(),
        ];

        if ($this->data !== null) {
            $data['data'] = $this->data;
        }

        return $data;
    }
}
