<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\JSONRPCRequest;
use McpSdk\Types\RequestId;
use McpSdk\Types\BaseRequestParams;

/**
 * @covers \McpSdk\Types\JSONRPCRequest
 * @covers \McpSdk\Types\RequestId
 * @covers \McpSdk\Types\BaseRequestParams
 * @covers \McpSdk\Types\Request
 */
class JSONRPCRequestTest extends TestCase
{
    public function testWithParams(): void
    {
        $id = new RequestId('id1');
        $params = new BaseRequestParams();
        $req = new JSONRPCRequest($id, 'method', $params);
        $this->assertSame('2.0', $req->jsonrpc);
        $this->assertSame($id, $req->id);
        $this->assertSame('method', $req->method);
        $this->assertSame($params, $req->params);
    }

    public function testWithoutParams(): void
    {
        $id = new RequestId(123);
        $req = new JSONRPCRequest($id, 'method');
        $this->assertSame('2.0', $req->jsonrpc);
        $this->assertSame($id, $req->id);
        $this->assertSame('method', $req->method);
        $this->assertNull($req->params);
    }
}
