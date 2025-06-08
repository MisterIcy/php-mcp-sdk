<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

final class Number implements ValueObjectInterface
{
    /**
     * Get the value of the number.
     *
     * @param int $value The numeric value.
     */
    public function __construct(
        private int $value
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equals(ValueObjectInterface $other): bool
    {
        if (!$other instanceof Number) {
            return false;
        }
        return $this->value === $other->getValue();
    }
}
