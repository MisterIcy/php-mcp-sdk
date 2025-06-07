<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Common;

final class Number implements ValueObjectInterface
{
    public function __construct(private int $value)
    {

    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function isEmpty(): bool
    {
        return false; // A Number is never empty by definition.
    }
}
