<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

use Stringable;

final class NonEmptyString implements ValueObjectInterface, Stringable
{
    public function __construct(private string $value)
    {
        if (trim($value) === '') {
            throw new \InvalidArgumentException('Value cannot be an empty string.');
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function isEmpty(): bool
    {
        return false; // A NonEmptyString is never empty by definition.
    }
}
