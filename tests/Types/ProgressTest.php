<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Progress;

/**
 * @covers \McpSdk\Types\Progress
 */
class ProgressTest extends TestCase
{
    public function testAllProperties(): void
    {
        $progress = new Progress(5.5, 10.0, 'Halfway');
        $this->assertSame(5.5, $progress->progress);
        $this->assertSame(10.0, $progress->total);
        $this->assertSame('Halfway', $progress->message);
    }

    public function testDefaults(): void
    {
        $progress = new Progress(1.0);
        $this->assertSame(1.0, $progress->progress);
        $this->assertNull($progress->total);
        $this->assertNull($progress->message);
    }
}
