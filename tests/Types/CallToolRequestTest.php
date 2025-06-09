<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CallToolRequest
 * @covers \McpSdk\Types\CallToolRequestParams
 */
class CallToolRequestTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new CallToolRequestParams('tool', ['foo' => 1]);
        $req = new CallToolRequest($params);
        $this->assertSame('tools/call', $req->method);
        $this->assertSame($params, $req->params);
    }
}

/**
 * @covers \McpSdk\Types\CallToolRequestParams
 */
class CallToolRequestParamsTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new CallToolRequestParams('tool', null);
        $this->assertSame('tool', $params->name);
        $this->assertNull($params->arguments);
    }
}
