<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CompleteRequest
 * @covers \McpSdk\Types\CompleteRequestParams
 * @covers \McpSdk\Types\CompleteRequestArgument
 * @covers \McpSdk\Types\PromptReference
 */
class CompleteRequestTest extends TestCase
{
    public function testConstruction(): void
    {
        $ref = new PromptReference('prompt');
        $arg = new CompleteRequestArgument('name', 'val');
        $params = new CompleteRequestParams($ref, $arg);
        $req = new CompleteRequest($params);
        $this->assertSame('completion/complete', $req->method);
        $this->assertSame($params, $req->params);
    }
}

/**
 * @covers \McpSdk\Types\CompleteRequestParams
 */
class CompleteRequestParamsTest extends TestCase
{
    public function testConstruction(): void
    {
        $ref = new ResourceReference('file://foo');
        $arg = new CompleteRequestArgument('n', 'v');
        $params = new CompleteRequestParams($ref, $arg);
        $this->assertSame($ref, $params->ref);
        $this->assertSame($arg, $params->argument);
    }
}

/**
 * @covers \McpSdk\Types\CompleteRequestArgument
 */
class CompleteRequestArgumentTest extends TestCase
{
    public function testConstruction(): void
    {
        $arg = new CompleteRequestArgument('foo', 'bar');
        $this->assertSame('foo', $arg->name);
        $this->assertSame('bar', $arg->value);
    }
}
