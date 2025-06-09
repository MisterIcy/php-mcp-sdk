<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\LoggingMessageNotification
 * @covers \McpSdk\Types\LoggingMessageNotificationParams
 */
class LoggingMessageNotificationTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new LoggingMessageNotificationParams('info', 'data', 'logger');
        $notif = new LoggingMessageNotification($params);
        $this->assertSame('notifications/message', $notif->method);
        $this->assertSame($params, $notif->params);
    }
}

/**
 * @covers \McpSdk\Types\LoggingMessageNotificationParams
 */
class LoggingMessageNotificationParamsTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new LoggingMessageNotificationParams('error', ['foo' => 'bar']);
        $this->assertSame('error', $params->level);
        $this->assertSame(['foo' => 'bar'], $params->data);
        $this->assertNull($params->logger);
    }
}
