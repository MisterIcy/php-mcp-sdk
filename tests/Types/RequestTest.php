<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Request;
use McpSdk\Types\BaseRequestParams;

/**
 * @covers \McpSdk\Types\Request
 * @covers \McpSdk\Types\BaseRequestParams
 */
class RequestTest extends TestCase
{
    public function testWithParams(): void
    {
        $params = new BaseRequestParams();
        $request = new Request('testMethod', $params);
        $this->assertSame('testMethod', $request->method);
        $this->assertSame($params, $request->params);
    }

    public function testWithoutParams(): void
    {
        $request = new Request('testMethod');
        $this->assertSame('testMethod', $request->method);
        $this->assertNull($request->params);
    }
}
