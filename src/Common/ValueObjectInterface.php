<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

interface ValueObjectInterface
{
    /**
     * Returns the value of the value object.
     *
     * @return mixed The value contained in the value object.
     */
    public function getValue(): mixed;

    /**
     * Checks if the value object is empty.
     *
     * @return bool True if the value object is empty or evaluates as empty in php, false otherwise.
     */
    public function isEmpty(): bool;
}
