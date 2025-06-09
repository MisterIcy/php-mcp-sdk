<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\JSONRPCResponse;
use McpSdk\Types\RequestId;
use McpSdk\Types\Result;

/**
 * @covers \McpSdk\Types\JSONRPCResponse
 * @covers \McpSdk\Types\RequestId
 * @covers \McpSdk\Types\Result
 */
class JSONRPCResponseTest extends TestCase
{
    public function testResponse(): void
    {
        $id = new RequestId('id');
        $result = new Result(['meta' => 1]);
        $resp = new JSONRPCResponse($id, $result);
        $this->assertSame('2.0', $resp->jsonrpc);
        $this->assertSame($id, $resp->id);
        $this->assertSame($result, $resp->result);
    }
}
