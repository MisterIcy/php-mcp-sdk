<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Common;

use PHPUnit\Framework\TestCase;
use MisterIcy\PhpMcpSdk\Common\Error;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

/**
 * @covers \MisterIcy\PhpMcpSdk\Common\Error
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 */

final class ErrorTest extends TestCase
{
    public function testCreateWithValidParameters(): void
    {
        $code = new Number(404);
        $message = new NonEmptyString('Not Found');
        $data = ['details' => 'The requested resource was not found.'];

        $error = new Error($code, $message, $data);

        $this->assertSame($code, $error->getCode());
        $this->assertSame($message, $error->getMessage());
        $this->assertSame($data, $error->getData());
    }

    public function testGettersReturnCorrectValues(): void
    {
        $code = new Number(500);
        $message = new NonEmptyString('Internal Server Error');
        $data = null;

        $error = new Error($code, $message, $data);

        $this->assertSame($code, $error->getCode());
        $this->assertSame($message, $error->getMessage());
        $this->assertNull($error->getData());
    }
}
