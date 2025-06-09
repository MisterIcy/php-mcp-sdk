<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\RequestId;

/**
 * @covers \McpSdk\Types\RequestId
 */
class RequestIdTest extends TestCase
{
    public function testStringId(): void
    {
        $id = new RequestId('abc');
        $this->assertSame('abc', $id->value);
    }

    public function testIntId(): void
    {
        $id = new RequestId(42);
        $this->assertSame(42, $id->value);
    }
}
