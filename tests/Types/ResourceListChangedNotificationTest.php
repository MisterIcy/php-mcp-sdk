<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ResourceListChangedNotification;

/**
 * @covers \McpSdk\Types\ResourceListChangedNotification
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\Request
 */
class ResourceListChangedNotificationTest extends TestCase
{
    public function testMethod(): void
    {
        $notif = new ResourceListChangedNotification();
        $this->assertSame('notifications/resources/list_changed', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
    }
}
