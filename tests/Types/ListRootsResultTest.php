<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListRootsResult;
use McpSdk\Types\Root;

/**
 * @covers \McpSdk\Types\ListRootsResult
 * @covers \McpSdk\Types\Root
 */
class ListRootsResultTest extends TestCase
{
    public function testProperties(): void
    {
        $roots = [new Root('uri:foo'), new Root('uri:bar', 'name')];
        $meta = ['foo' => 'bar'];
        $result = new ListRootsResult($roots, $meta);
        $this->assertSame($roots, $result->roots);
        $this->assertSame($meta, $result->_meta);
    }

    public function testMetaOptional(): void
    {
        $roots = [new Root('uri:foo')];
        $result = new ListRootsResult($roots);
        $this->assertNull($result->_meta);
    }
}
