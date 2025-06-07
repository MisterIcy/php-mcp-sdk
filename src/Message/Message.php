<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

abstract class Message implements MessageInterface
{
    /**
     * Creates a new message instance with the specified method name.
     *
     * @param NonEmptyString $method The method name to be invoked.
     * @throws \RuntimeException If the method name starts with "rpc.".
     * @throws \InvalidArgumentException If the method name is empty.
     * @since 0.1.0
     */
    protected function __construct(
        protected NonEmptyString $method
    ) {
        if (str_starts_with($method->getValue(), 'rpc.')) {
            throw new \RuntimeException('Method names cannot start with "rpc."');
        }
    }

    /**
     * Returns the name of the method to be invoked.
     * @return NonEmptyString The method name as a non-empty string.
     * @since 0.1.0
     */
    public function getMethod(): NonEmptyString
    {
        return $this->method;
    }
}
