<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ToolListChangedNotification;

/**
 * @covers \McpSdk\Types\ToolListChangedNotification
 */
class ToolListChangedNotificationTest extends TestCase
{
    public function testDefaults(): void
    {
        $notif = new ToolListChangedNotification();
        $this->assertSame('tools/listChanged', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
    }
}
