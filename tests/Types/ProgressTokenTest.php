<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ProgressToken;

/**
 * @covers \McpSdk\Types\ProgressToken
 */
class ProgressTokenTest extends TestCase
{
    public function testStringValue(): void
    {
        $token = new ProgressToken('abc');
        $this->assertSame('abc', $token->value);
    }

    public function testIntValue(): void
    {
        $token = new ProgressToken(123);
        $this->assertSame(123, $token->value);
    }
}
