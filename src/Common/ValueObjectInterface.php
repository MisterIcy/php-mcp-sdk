<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

interface ValueObjectInterface
{
    /**
     * Get the value of the value object.
     *
     * @return mixed The value contained in the value object.
     * @since 0.1.0
     */
    public function getValue(): mixed;

    /**
     * Check if this value object is equal to another value object.
     *
     * @param ValueObjectInterface $other The other value object to compare with.
     * @return bool True if the value objects are equal, false otherwise.
     * @since 0.1.0
     */
    public function equals(ValueObjectInterface $other): bool;
}
