<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ProgressNotification;
use McpSdk\Types\Progress;

/**
 * @covers \McpSdk\Types\ProgressNotification
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\Progress
 */
class ProgressNotificationTest extends TestCase
{
    public function testProperties(): void
    {
        $progress = new Progress(2.0, 5.0, 'Working');
        $notif = new ProgressNotification($progress);
        $this->assertSame('notifications/progress', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
        $this->assertSame($progress, $notif->progress);
    }
}
