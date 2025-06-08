<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Message\Request;
use MisterIcy\PhpMcpSdk\Message\JsonRpcMessageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Request
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 */
final class RequestTest extends TestCase
{
    public function testConstructorAndGettersWithNumberId(): void
    {
        $id = new Number(123);
        $method = new NonEmptyString('testMethod');
        $params = ['foo' => 'bar'];
        $request = new Request($id, $method, $params);

        $this->assertSame($id, $request->getId());
        $this->assertSame($method, $request->getMethod());
        $this->assertSame($params, $request->getParams());
        $this->assertSame(JsonRpcMessageInterface::JSON_RPC_VERSION, $request->getJsonRpcVersion());
    }

    public function testConstructorAndGettersWithNonEmptyStringId(): void
    {
        $id = new NonEmptyString('abc');
        $method = new NonEmptyString('testMethod');
        $params = null;
        $request = new Request($id, $method, $params);

        $this->assertSame($id, $request->getId());
        $this->assertSame($method, $request->getMethod());
        $this->assertNull($request->getParams());
    }

    public function testConstructorThrowsForReservedMethodName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Method names cannot start with "rpc." as it is reserved for internal use.');
        $id = new Number(1);
        $method = new NonEmptyString('rpc.internal');
        new Request($id, $method);
    }

    public function testJsonSerializeWithParams(): void
    {
        $id = new Number(42);
        $method = new NonEmptyString('foo');
        $params = ['a' => 1, 'b' => 2];
        $request = new Request($id, $method, $params);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'id' => 42,
            'method' => 'foo',
            'params' => ['a' => 1, 'b' => 2],
        ];
        $this->assertSame($expected, $request->jsonSerialize());
    }

    public function testJsonSerializeWithoutParams(): void
    {
        $id = new NonEmptyString('id');
        $method = new NonEmptyString('bar');
        $request = new Request($id, $method);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'id' => 'id',
            'method' => 'bar',
        ];
        $this->assertSame($expected, $request->jsonSerialize());
    }
}
