<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Message;

use MisterIcy\PhpMcpSdk\Message\Notification;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Notification
 * @covers \MisterIcy\PhpMcpSdk\Message\Message
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 */
final class NotificationTest extends TestCase
{
    public function testCreateWithValidMethodAndParams(): void
    {
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];

        $notification = new Notification($method, $params);

        $this->assertSame('testMethod', $notification->getMethod()->getValue());
        $this->assertSame($params, $notification->getParams());
    }

    public function testJsonSerialize(): void
    {
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];

        $notification = new Notification($method, $params);

        $expectedJson = [
            'jsonrpc' => Notification::JSON_RPC_VERSION,
            'method' => 'testMethod',
            'params' => $params,
        ];

        $this->assertSame($expectedJson, $notification->jsonSerialize());
    }

    public function testJsonSerializeWithoutParams(): void
    {
        $method = new NonEmptyString('testMethod');

        $notification = new Notification($method);

        $expectedJson = [
            'jsonrpc' => Notification::JSON_RPC_VERSION,
            'method' => 'testMethod',
            'params' => [],
        ];

        $this->assertSame($expectedJson, $notification->jsonSerialize());
    }

    public function testGetMethod(): void
    {
        $method = new NonEmptyString('testMethod');
        $notification = new Notification($method);

        $this->assertSame('testMethod', $notification->getMethod()->getValue());
    }

    public function testCreateNotificationWithInvalidMethodThrowsException(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Method names cannot start with "rpc."');

        new Notification(new NonEmptyString('rpc.invalidMethod'));
    }
}
