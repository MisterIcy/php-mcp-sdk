<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Common;

use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 */
final class NonEmptyStringTest extends TestCase
{
    public function testCreateWithAnEmptyStringThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Value cannot be an empty string.');

        new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('');
    }

    public function testCreateWithAStringWithOnlyWhitespaceThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Value cannot be an empty string.');

        new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('   ');
    }

    public function testCreateWithAValidString(): void
    {
        $nonEmptyString = new \MisterIcy\PhpMcpSdk\Common\NonEmptyString('Hello, World!');

        $this->assertSame('Hello, World!', $nonEmptyString->getValue());
        $this->assertSame('Hello, World!', (string) $nonEmptyString);
        $this->assertFalse($nonEmptyString->isEmpty());
    }
}
