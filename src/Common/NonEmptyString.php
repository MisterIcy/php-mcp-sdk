<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

use InvalidArgumentException;
use Stringable;

final class NonEmptyString implements ValueObjectInterface, Stringable
{
    /**
     * Get the value of the non-empty string.
     *
     * @param string $value The non-empty string value.
     * @throws InvalidArgumentException if the string is empty or consists only of whitespace.
     */
    public function __construct(
        private string $value
    ) {
        if (trim($value) === '') {
            throw new InvalidArgumentException(
                'The string cannot be empty or consist only of whitespace.'
            );
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equals(ValueObjectInterface $other): bool
    {
        if (!$other instanceof NonEmptyString) {
            return false;
        }
        return $this->value === $other->getValue();
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
