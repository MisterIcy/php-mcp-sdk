<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListRootsRequest;

/**
 * @covers \McpSdk\Types\ListRootsRequest
 */
class ListRootsRequestTest extends TestCase
{
    public function testDefaults(): void
    {
        $req = new ListRootsRequest();
        $this->assertSame('roots/list', $req->method);
        $this->assertSame('2.0', $req->jsonrpc);
    }
}
