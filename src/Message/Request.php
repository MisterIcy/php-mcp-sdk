<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

final class Request extends Message
{
    /**
     * Creates a new JSON-RPC 2.0 request message.
     *
     * @param NonEmptyString|Number $id The unique identifier for the request.
     * @param NonEmptyString $method The method name to be invoked.
     * @param array<string, mixed> $params The parameters for the request.
     */
    public function __construct(
        private NonEmptyString|Number $id,
        NonEmptyString $method,
        private array $params = []
    ) {
        parent::__construct($method);
    }

    public function getId(): NonEmptyString|Number
    {
        return $this->id;
    }

    /**
     * Returns the parameters for the request.
     *
     * @return array<string, mixed> The parameters for the request.
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * Returns the JSON representation of the request message.
     *
     * @return array<string, mixed> The JSON-RPC 2.0 request message.
     */
    public function jsonSerialize(): array
    {
        return [
            'jsonrpc' => self::JSON_RPC_VERSION,
            'id' => $this->id->getValue(),
            'method' => $this->method->getValue(),
            'params' => $this->params,
        ];
    }
}
