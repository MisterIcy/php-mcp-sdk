<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ResourceUpdatedNotification;

/**
 * @covers \McpSdk\Types\ResourceUpdatedNotification
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\Request
 */
class ResourceUpdatedNotificationTest extends TestCase
{
    public function testProperties(): void
    {
        $notif = new ResourceUpdatedNotification('file://foo.txt');
        $this->assertSame('notifications/resources/updated', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
        $this->assertSame('file://foo.txt', $notif->uri);
    }
}
