<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Common;

use PHPUnit\Framework\TestCase;
use MisterIcy\PhpMcpSdk\Common\Number;

/**
 * @covers \MisterIcy\PhpMcpSdk\Common\Number
 */
final class NumberTest extends TestCase
{
    public function testCreateWithValidInteger(): void
    {
        $number = new Number(42);
        $this->assertSame(42, $number->getValue());
        $this->assertFalse($number->isEmpty());
    }

    public function testGetValue(): void
    {
        $number = new Number(100);
        $this->assertSame(100, $number->getValue());
    }

    public function testIsEmpty(): void
    {
        $number = new Number(0);
        $this->assertFalse($number->isEmpty()); // A Number is never empty by definition.
    }
}
