<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\GetPromptRequest;

/**
 * @covers \McpSdk\Types\GetPromptRequest
 * @covers \McpSdk\Types\Request
 */
class GetPromptRequestTest extends TestCase
{
    public function testWithArguments(): void
    {
        $req = new GetPromptRequest('foo', ['bar' => 'baz']);
        $this->assertSame('prompts/get', $req->method);
        $this->assertSame('foo', $req->name);
        $this->assertSame(['bar' => 'baz'], $req->arguments);
    }
    public function testWithoutArguments(): void
    {
        $req = new GetPromptRequest('foo');
        $this->assertSame('prompts/get', $req->method);
        $this->assertSame('foo', $req->name);
        $this->assertNull($req->arguments);
    }
}
