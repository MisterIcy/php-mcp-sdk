<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Message\Notification;
use MisterIcy\PhpMcpSdk\Message\JsonRpcMessageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Notification
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 */
final class NotificationTest extends TestCase
{
    public function testConstructorAndGettersWithParams(): void
    {
        $method = new NonEmptyString('testMethod');
        $params = ['foo' => 'bar'];
        $notification = new Notification($method, $params);

        $this->assertSame($method, $notification->getMethod());
        $this->assertSame($params, $notification->getParams());
        $this->assertSame(JsonRpcMessageInterface::JSON_RPC_VERSION, $notification->getJsonRpcVersion());
    }

    public function testConstructorAndGettersWithoutParams(): void
    {
        $method = new NonEmptyString('testMethod');
        $notification = new Notification($method);

        $this->assertSame($method, $notification->getMethod());
        $this->assertNull($notification->getParams());
    }

    public function testConstructorThrowsForReservedMethodName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Method names cannot start with "rpc." as it is reserved for internal use.');
        $method = new NonEmptyString('rpc.internal');
        new Notification($method);
    }

    public function testJsonSerializeWithParams(): void
    {
        $method = new NonEmptyString('foo');
        $params = ['a' => 1, 'b' => 2];
        $notification = new Notification($method, $params);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'method' => 'foo',
            'params' => ['a' => 1, 'b' => 2],
        ];
        $this->assertSame($expected, $notification->jsonSerialize());
    }

    public function testJsonSerializeWithoutParams(): void
    {
        $method = new NonEmptyString('bar');
        $notification = new Notification($method);
        $expected = [
            'jsonrpc' => JsonRpcMessageInterface::JSON_RPC_VERSION,
            'method' => 'bar',
        ];
        $this->assertSame($expected, $notification->jsonSerialize());
    }
}
