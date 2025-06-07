<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

final class Error
{
    public function __construct(
        private Number $code,
        private NonEmptyString $message,
        private mixed $data = null
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

    public function getData(): mixed
    {
        return $this->data;
    }
}
