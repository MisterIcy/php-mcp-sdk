<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Error;
use MisterIcy\PhpMcpSdk\Message\Response;
use MisterIcy\PhpMcpSdk\Common\Number;
use PHPUnit\Framework\TestCase;

/**
  * @covers \MisterIcy\PhpMcpSdk\Message\Response
  * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
  * @uses \MisterIcy\PhpMcpSdk\Common\Number
  * @uses \MisterIcy\PhpMcpSdk\Common\Error
  */
final class ResponseTest extends TestCase
{
    public function testCreateWithIdAndResult(): void
    {
        $id = new NonEmptyString('123');
        $result = ['key' => 'value'];
        $response = new \MisterIcy\PhpMcpSdk\Message\Response($id, $result);

        $this->assertSame('123', $response->getId()->getValue());
        $this->assertSame($result, $response->getResult());
    }

    public function testCreateWithIdAndError(): void
    {
        $id = new NonEmptyString('123');
        $error = new Error(new Number(-32603), new NonEmptyString('Internal error'));
        $response = new \MisterIcy\PhpMcpSdk\Message\Response($id, null, $error);

        $this->assertSame('123', $response->getId()->getValue());
        $this->assertNull($response->getResult());
        $this->assertSame($error, $response->getError());
    }

    public function testCreateWithIdErrorAndResultThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Only one of result or error can be provided.');

        $id = new NonEmptyString('123');
        $result = ['key' => 'value'];
        $error = new Error(new Number(-32603), new NonEmptyString('Internal error'));

        new \MisterIcy\PhpMcpSdk\Message\Response($id, $result, $error);
    }

    public function testCreateWitoutResultOrErrorThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Either result or error must be provided.');

        $id = new NonEmptyString('123');

        new \MisterIcy\PhpMcpSdk\Message\Response($id);
    }

    public function testJsonSerializeWithResult(): void
    {
        $id = new NonEmptyString('123');
        $result = ['key' => 'value'];
        $response = new \MisterIcy\PhpMcpSdk\Message\Response($id, $result);

        $expectedJson = [
            'jsonrpc' => \MisterIcy\PhpMcpSdk\Message\Response::JSON_RPC_VERSION,
            'id' => '123',
            'result' => $result,
        ];

        $this->assertSame($expectedJson, $response->jsonSerialize());
    }

    public function testJsonSerializeWithError(): void
    {
        $id = new NonEmptyString('123');
        $error = new Error(new Number(-32603), new NonEmptyString('Internal error'));
        $response = new \MisterIcy\PhpMcpSdk\Message\Response($id, null, $error);

        $expectedJson = [
            'jsonrpc' => \MisterIcy\PhpMcpSdk\Message\Response::JSON_RPC_VERSION,
            'id' => '123',
            'error' => [
                'code' => -32603,
                'message' => 'Internal error',
                'data' => null,
            ],
        ];

        $this->assertSame($expectedJson, $response->jsonSerialize());
    }
}
