<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\InitializedNotification;

/**
 * @covers \McpSdk\Types\InitializedNotification
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\Request
 */
class InitializedNotificationTest extends TestCase
{
    public function testMethod(): void
    {
        $notif = new InitializedNotification();
        $this->assertSame('notifications/initialized', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
    }
}
