<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Message\Error;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Error
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 */
final class ErrorTest extends TestCase
{
    public function testConstructorAndGettersWithData(): void
    {
        $code = new Number(-32000);
        $message = new NonEmptyString('Server error');
        $data = ['foo' => 'bar'];
        $error = new Error($code, $message, $data);

        $this->assertSame($code, $error->getCode());
        $this->assertSame($message, $error->getMessage());
        $this->assertSame($data, $error->getData());
    }

    public function testConstructorAndGettersWithoutData(): void
    {
        $code = new Number(-32001);
        $message = new NonEmptyString('Another error');
        $error = new Error($code, $message);

        $this->assertSame($code, $error->getCode());
        $this->assertSame($message, $error->getMessage());
        $this->assertNull($error->getData());
    }

    public function testJsonSerializeWithData(): void
    {
        $code = new Number(-32002);
        $message = new NonEmptyString('Error with data');
        $data = ['details' => 123];
        $error = new Error($code, $message, $data);
        $expected = [
            'code' => -32002,
            'message' => 'Error with data',
            'data' => ['details' => 123],
        ];
        $this->assertSame($expected, $error->jsonSerialize());
    }

    public function testJsonSerializeWithoutData(): void
    {
        $code = new Number(-32003);
        $message = new NonEmptyString('Error without data');
        $error = new Error($code, $message);
        $expected = [
            'code' => -32003,
            'message' => 'Error without data',
        ];
        $this->assertSame($expected, $error->jsonSerialize());
    }
}
