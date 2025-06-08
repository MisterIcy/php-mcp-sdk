<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

interface JsonRpcMessageInterface extends \JsonSerializable
{
    public const JSON_RPC_VERSION = '2.0';

    public function getJsonRpcVersion(): string;
}
