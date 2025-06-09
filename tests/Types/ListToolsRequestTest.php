<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ListToolsRequest;

/**
 * @covers \McpSdk\Types\ListToolsRequest
 */
class ListToolsRequestTest extends TestCase
{
    public function testDefaults(): void
    {
        $req = new ListToolsRequest();
        $this->assertSame('tools/list', $req->method);
        $this->assertSame('2.0', $req->jsonrpc);
    }
}
