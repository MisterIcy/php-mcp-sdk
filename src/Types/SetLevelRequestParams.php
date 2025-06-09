<?php

declare(strict_types=1);

namespace McpSdk\Types;

class SetLevelRequestParams extends BaseRequestParams
{
    public string $level;

    public function __construct(string $level)
    {
        $this->level = $level;
    }
}
