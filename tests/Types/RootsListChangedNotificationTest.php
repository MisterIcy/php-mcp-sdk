<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\RootsListChangedNotification
 */
class RootsListChangedNotificationTest extends TestCase
{
    public function testConstruction(): void
    {
        $notif = new RootsListChangedNotification();
        $this->assertSame('notifications/roots/list_changed', $notif->method);
        $this->assertNull($notif->params);
    }
}
