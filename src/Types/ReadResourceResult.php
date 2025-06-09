<?php

declare(strict_types=1);

namespace McpSdk\Types;

class ReadResourceResult extends Result
{
    /** @var array<TextResourceContents|BlobResourceContents> */
    public array $contents;

    /**
     * @param array<TextResourceContents|BlobResourceContents> $contents
     * @param array<string, mixed>|null $_meta
     */
    public function __construct(array $contents, ?array $_meta = null)
    {
        parent::__construct($_meta);
        $this->contents = $contents;
    }
}
