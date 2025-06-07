<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use JsonSerializable;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

/**
 * Interface for JSON-RPC 2.0 messages.
 *
 * @since 0.1.0
 * @see https://www.jsonrpc.org/specification
 */
interface MessageInterface extends JsonSerializable
{
    /**
     * The JSON-RPC version.
     *
     * @since 0.1.0
     */
    public const JSON_RPC_VERSION = '2.0';
}
