<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Implementation;

/**
 * @covers \McpSdk\Types\Implementation
 */
class ImplementationTest extends TestCase
{
    public function testProperties(): void
    {
        $impl = new Implementation('php-sdk', '1.0.0');
        $this->assertSame('php-sdk', $impl->name);
        $this->assertSame('1.0.0', $impl->version);
    }
}
