<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Resource;

/**
 * @covers \McpSdk\Types\Resource
 */
class ResourceTest extends TestCase
{
    public function testProperties(): void
    {
        $res = new Resource('file://foo.txt', 'Foo', 'desc', 'text/plain');
        $this->assertSame('file://foo.txt', $res->uri);
        $this->assertSame('Foo', $res->name);
        $this->assertSame('desc', $res->description);
        $this->assertSame('text/plain', $res->mimeType);
    }
    public function testDefaults(): void
    {
        $res = new Resource('file://bar.txt', 'Bar');
        $this->assertSame('file://bar.txt', $res->uri);
        $this->assertSame('Bar', $res->name);
        $this->assertNull($res->description);
        $this->assertNull($res->mimeType);
    }
}
