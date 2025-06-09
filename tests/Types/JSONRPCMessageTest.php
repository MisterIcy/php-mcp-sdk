<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\JSONRPCMessage;
use McpSdk\Types\JSONRPCRequest;
use McpSdk\Types\JSONRPCNotification;
use McpSdk\Types\JSONRPCResponse;
use McpSdk\Types\JSONRPCError;
use McpSdk\Types\RequestId;
use McpSdk\Types\Result;
use McpSdk\Types\JSONRPCErrorObject;

/**
 * @covers \McpSdk\Types\JSONRPCMessage
 * @covers \McpSdk\Types\JSONRPCRequest
 * @covers \McpSdk\Types\JSONRPCNotification
 * @covers \McpSdk\Types\JSONRPCResponse
 * @covers \McpSdk\Types\JSONRPCError
 * @covers \McpSdk\Types\RequestId
 * @covers \McpSdk\Types\Result
 * @covers \McpSdk\Types\JSONRPCErrorObject
 * @covers \McpSdk\Types\Request
 */
class JSONRPCMessageTest extends TestCase
{
    public function testRequest(): void
    {
        $msg = new JSONRPCMessage(new JSONRPCRequest(new RequestId('id'), 'method'));
        $this->assertInstanceOf(JSONRPCRequest::class, $msg->message);
    }

    public function testNotification(): void
    {
        $msg = new JSONRPCMessage(new JSONRPCNotification('notify'));
        $this->assertInstanceOf(JSONRPCNotification::class, $msg->message);
    }

    public function testResponse(): void
    {
        $msg = new JSONRPCMessage(new JSONRPCResponse(new RequestId('id'), new Result()));
        $this->assertInstanceOf(JSONRPCResponse::class, $msg->message);
    }

    public function testError(): void
    {
        $msg = new JSONRPCMessage(new JSONRPCError(new RequestId('id'), new JSONRPCErrorObject(-1, 'err')));
        $this->assertInstanceOf(JSONRPCError::class, $msg->message);
    }
}
