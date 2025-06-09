<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Result;

/**
 * @covers \McpSdk\Types\Result
 */
class ResultTest extends TestCase
{
    public function testWithMeta(): void
    {
        $meta = ['foo' => 'bar'];
        $result = new Result($meta);
        $this->assertSame($meta, $result->_meta);
    }

    public function testWithoutMeta(): void
    {
        $result = new Result();
        $this->assertNull($result->_meta);
    }
}
