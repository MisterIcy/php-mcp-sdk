<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Common;

/**
 * @covers \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 */
final class NonEmptyStringTest extends \PHPUnit\Framework\TestCase
{
    public function testNonEmptyStringCreation(): void
    {
        $nonEmptyString = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Hello, World!');
        $this->assertSame('Hello, World!', $nonEmptyString->getValue());
    }

    public function testNonEmptyStringThrowsExceptionOnEmpty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('');
    }

    public function testNonEmptyStringThrowsExceptionOnWhitespace(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('   ');
    }

    public function testEqualsToOtherString(): void
    {
        $string1 = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Test');
        $string2 = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Test');
        $this->assertTrue($string1->equals($string2));
    }

    public function testNotEqualsToDifferentString(): void
    {
        $string1 = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Test1');
        $string2 = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Test2');
        $this->assertFalse($string1->equals($string2));
    }

    public function testNotEqualToDifferentTypeThatImplementsTheValueObjectInterface(): void
    {
        $string1 = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Test');
        $otherValueObject = $this->createMock(\MisterIcy\PhpMcpSdk\Common\ValueObjectInterface::class);
        $otherValueObject->method('getValue')->willReturn('Test');

        $this->assertFalse($string1->equals($otherValueObject));
    }

    public function testToString(): void
    {
        $nonEmptyString = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Hello, World!');
        $this->assertSame('Hello, World!', (string)$nonEmptyString);
    }
}
