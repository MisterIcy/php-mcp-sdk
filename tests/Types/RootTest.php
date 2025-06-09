<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Root;

/**
 * @covers \McpSdk\Types\Root
 */
class RootTest extends TestCase
{
    public function testProperties(): void
    {
        $root = new Root('uri:foo', 'name', 'desc');
        $this->assertSame('uri:foo', $root->uri);
        $this->assertSame('name', $root->name);
        $this->assertSame('desc', $root->description);
    }

    public function testDefaults(): void
    {
        $root = new Root('uri:bar');
        $this->assertSame('uri:bar', $root->uri);
        $this->assertNull($root->name);
        $this->assertNull($root->description);
    }
}
