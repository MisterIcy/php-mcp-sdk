<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Represents a JSON-RPC error object.
 */
class JSONRPCErrorObject
{
    public int $code;
    public string $message;
    /**
     * @var mixed|null
     */
    public $data;

    /**
     * @param mixed|null $data
     */
    public function __construct(int $code, string $message, $data = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }
}
