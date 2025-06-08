<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Common\ValueObjectInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Common\Number
 */
final class NumberTest extends TestCase
{
    public function testGetValueReturnsConstructorValue(): void
    {
        $number = new Number(42);
        $this->assertSame(42, $number->getValue());
    }

    public function testEqualsReturnsTrueForSameValue(): void
    {
        $a = new Number(10);
        $b = new Number(10);
        $this->assertTrue($a->equals($b));
    }

    public function testEqualsReturnsFalseForDifferentValue(): void
    {
        $a = new Number(10);
        $b = new Number(20);
        $this->assertFalse($a->equals($b));
    }

    public function testEqualsReturnsFalseForDifferentType(): void
    {
        $a = new Number(10);
        $mock = $this->getMockBuilder(ValueObjectInterface::class)
            ->getMock();
        // Cast mock to ValueObjectInterface to satisfy type checker
        /** @var ValueObjectInterface $mock */
        $this->assertFalse($a->equals($mock));
    }
}
