<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\JSONRPCError;
use McpSdk\Types\JSONRPCErrorObject;
use McpSdk\Types\RequestId;

/**
 * @covers \McpSdk\Types\JSONRPCError
 * @covers \McpSdk\Types\JSONRPCErrorObject
 * @covers \McpSdk\Types\RequestId
 */
class JSONRPCErrorTest extends TestCase
{
    public function testErrorWithData(): void
    {
        $id = new RequestId('id');
        $errorObj = new JSONRPCErrorObject(-32600, 'Invalid request', ['foo' => 'bar']);
        $err = new JSONRPCError($id, $errorObj);
        $this->assertSame('2.0', $err->jsonrpc);
        $this->assertSame($id, $err->id);
        $this->assertSame($errorObj, $err->error);
        $this->assertSame(-32600, $err->error->code);
        $this->assertSame('Invalid request', $err->error->message);
        $this->assertSame(['foo' => 'bar'], $err->error->data);
    }

    public function testErrorWithoutData(): void
    {
        $id = new RequestId(1);
        $errorObj = new JSONRPCErrorObject(-32601, 'Method not found');
        $err = new JSONRPCError($id, $errorObj);
        $this->assertNull($err->error->data);
    }
}
