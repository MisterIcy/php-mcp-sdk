<?php

declare(strict_types=1);

namespace McpSdk\Types;

class CompleteRequestArgument
{
    public string $name;
    public string $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
