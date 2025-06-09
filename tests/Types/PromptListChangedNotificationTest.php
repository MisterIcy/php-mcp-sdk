<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\PromptListChangedNotification;

/**
 * @covers \McpSdk\Types\PromptListChangedNotification
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\Request
 */
class PromptListChangedNotificationTest extends TestCase
{
    public function testMethod(): void
    {
        $notif = new PromptListChangedNotification();
        $this->assertSame('notifications/prompts/list_changed', $notif->method);
        $this->assertSame('2.0', $notif->jsonrpc);
    }
}
