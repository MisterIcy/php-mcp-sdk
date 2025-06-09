<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * @covers \McpSdk\Types\CancelledNotification
 * @covers \McpSdk\Types\CancelledNotificationParams
 */
class CancelledNotificationTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruction(): void
    {
        $params = new CancelledNotificationParams('abc', 'User cancelled');
        $notif = new CancelledNotification($params);
        $this->assertSame('notifications/cancelled', $notif->method);
        $this->assertSame($params, $notif->params);
    }
}

/**
 * @covers \McpSdk\Types\CancelledNotificationParams
 */
class CancelledNotificationParamsTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruction(): void
    {
        $params = new CancelledNotificationParams(123, null);
        $this->assertSame(123, $params->requestId);
        $this->assertNull($params->reason);
    }
}
