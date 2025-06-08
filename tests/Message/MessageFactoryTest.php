<?php

declare(strict_types=1);

use MisterIcy\PhpMcpSdk\Message\MessageFactory;
use MisterIcy\PhpMcpSdk\Message\Notification;
use MisterIcy\PhpMcpSdk\Message\Request;
use MisterIcy\PhpMcpSdk\Message\Response;
use MisterIcy\PhpMcpSdk\Message\Error;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\MessageFactory
 * @uses \MisterIcy\PhpMcpSdk\Message\Notification
 * @uses \MisterIcy\PhpMcpSdk\Message\Request
 * @uses \MisterIcy\PhpMcpSdk\Message\Response
 * @uses \MisterIcy\PhpMcpSdk\Message\Error
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 */
final class MessageFactoryTest extends TestCase
{
    public function testCreateNotification(): void
    {
        $json = json_encode([
            'jsonrpc' => '2.0',
            'method' => 'notify',
            'params' => ['foo' => 'bar'],
        ]);
        $msg = MessageFactory::fromJson($json);
        $this->assertInstanceOf(Notification::class, $msg);
        if ($msg instanceof Notification) {
            $this->assertSame('notify', $msg->getMethod()->getValue());
            $this->assertSame(['foo' => 'bar'], $msg->getParams());
        }
    }

    public function testCreateRequestWithStringId(): void
    {
        $json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 'abc',
            'method' => 'doSomething',
            'params' => [1, 2, 3],
        ]);
        $msg = MessageFactory::fromJson($json);
        $this->assertInstanceOf(Request::class, $msg);
        if ($msg instanceof Request) {
            $this->assertSame('abc', $msg->getId()->getValue());
            $this->assertSame('doSomething', $msg->getMethod()->getValue());
            $this->assertSame([1, 2, 3], $msg->getParams());
        }
    }

    public function testCreateRequestWithIntId(): void
    {
        $json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 42,
            'method' => 'doSomething',
        ]);
        $msg = MessageFactory::fromJson($json);
        $this->assertInstanceOf(Request::class, $msg);
        if ($msg instanceof Request) {
            $this->assertSame(42, $msg->getId()->getValue());
            $this->assertSame('doSomething', $msg->getMethod()->getValue());
        }
    }

    public function testCreateResponseWithResult(): void
    {
        $json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 'xyz',
            'result' => ['ok' => true],
        ]);
        $msg = MessageFactory::fromJson($json);
        $this->assertInstanceOf(Response::class, $msg);
        if ($msg instanceof Response) {
            $this->assertSame('xyz', $msg->getId()->getValue());
            $this->assertNull($msg->getError());
            $this->assertSame(['ok' => true], $msg->getResult());
        }
    }

    public function testCreateResponseWithError(): void
    {
        $json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 7,
            'error' => [
                'code' => -32000,
                'message' => 'Server error',
                'data' => ['info' => 123],
            ],
        ]);
        $msg = MessageFactory::fromJson($json);
        $this->assertInstanceOf(Response::class, $msg);
        if ($msg instanceof Response) {
            $this->assertSame(7, $msg->getId()->getValue());
            $this->assertInstanceOf(Error::class, $msg->getError());
            if ($msg->getError() instanceof Error) {
                $this->assertSame(-32000, $msg->getError()->getCode()->getValue());
                $this->assertSame('Server error', $msg->getError()->getMessage()->getValue());
                $this->assertSame(['info' => 123], $msg->getError()->getData());
            }
            $this->assertNull($msg->getResult());
        }
    }

    public function testThrowsOnJsonException(): void
    {
        $this->expectException(\JsonException::class);
        MessageFactory::fromJson('{invalid json');
    }

    public function testThrowsOnMissingJsonRpcVersion(): void
    {
        $json = json_encode(['id' => 1, 'method' => 'foo']);
        $this->expectException(\InvalidArgumentException::class);
        MessageFactory::fromJson($json);
    }

    public function testThrowsOnUnknownType(): void
    {
        $json = json_encode(['jsonrpc' => '2.0', 'foo' => 'bar']);
        $this->expectException(\InvalidArgumentException::class);
        MessageFactory::fromJson($json);
    }

    public function testThrowsOnInvalidIdType(): void
    {
        $json = json_encode(['jsonrpc' => '2.0', 'id' => [], 'method' => 'foo']);
        $this->expectException(\InvalidArgumentException::class);
        MessageFactory::fromJson($json);
    }
}
