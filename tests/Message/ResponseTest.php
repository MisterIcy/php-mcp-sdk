<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Message\Error;
use MisterIcy\PhpMcpSdk\Message\Response;
use MisterIcy\PhpMcpSdk\Message\JsonRpcMessageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Response
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 * @uses \MisterIcy\PhpMcpSdk\Message\Error
 */
final class ResponseTest extends TestCase
{
    public function testConstructorThrowsIfBothErrorAndResultNull(): void
    {
        $id = new NonEmptyString('id');
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Either error or result must be provided.');
        new Response($id, null, null);
    }

    public function testConstructorThrowsIfBothErrorAndResultProvided(): void
    {
        $id = new NonEmptyString('id');
        $error = new Error(new Number(-1), new NonEmptyString('err'));
        $result = ['foo' => 'bar'];
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Only one of error or result can be provided.');
        new Response($id, $error, $result);
    }

    public function testGettersWithError(): void
    {
        $id = new NonEmptyString('id');
        $error = new Error(new Number(-1), new NonEmptyString('err'));
        $response = new Response($id, $error, null);
        $this->assertSame($id, $response->getId());
        $this->assertSame($error, $response->getError());
        $this->assertNull($response->getResult());
        $this->assertSame(JsonRpcMessageInterface::JSON_RPC_VERSION, $response->getJsonRpcVersion());
    }

    public function testGettersWithResult(): void
    {
        $id = new NonEmptyString('id2');
        $result = ['foo' => 'bar'];
        $response = new Response($id, null, $result);
        $this->assertSame($id, $response->getId());
        $this->assertNull($response->getError());
        $this->assertSame($result, $response->getResult());
    }

    public function testJsonSerializeWithError(): void
    {
        $id = new NonEmptyString('id');
        $error = new Error(new Number(-1), new NonEmptyString('err'), ['info' => 123]);
        $response = new Response($id, $error, null);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'id' => 'id',
            'error' => [
                'code' => -1,
                'message' => 'err',
                'data' => ['info' => 123],
            ],
        ];
        $this->assertSame($expected, $response->jsonSerialize());
    }

    public function testJsonSerializeWithResult(): void
    {
        $id = new NonEmptyString('id3');
        $result = ['foo' => 'bar'];
        $response = new Response($id, null, $result);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'id' => 'id3',
            'result' => ['foo' => 'bar'],
        ];
        $this->assertSame($expected, $response->jsonSerialize());
    }
}
