<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\JSONRPCNotification;
use McpSdk\Types\BaseRequestParams;

/**
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\BaseRequestParams
 * @covers \McpSdk\Types\Request
 */
class JSONRPCNotificationTest extends TestCase
{
    public function testWithParams(): void
    {
        $params = new BaseRequestParams();
        $notif = new JSONRPCNotification('notify', $params);
        $this->assertSame('2.0', $notif->jsonrpc);
        $this->assertSame('notify', $notif->method);
        $this->assertSame($params, $notif->params);
    }

    public function testWithoutParams(): void
    {
        $notif = new JSONRPCNotification('notify');
        $this->assertSame('2.0', $notif->jsonrpc);
        $this->assertSame('notify', $notif->method);
        $this->assertNull($notif->params);
    }
}
