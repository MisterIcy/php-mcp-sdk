<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\AutocompleteRequest;
use McpSdk\Types\SamplingParameters;

/**
 * @covers \McpSdk\Types\AutocompleteRequest
 * @covers \McpSdk\Types\SamplingParameters
 */
class AutocompleteRequestTest extends TestCase
{
    public function testProperties(): void
    {
        $sampling = new SamplingParameters(0.5);
        $context = ['foo' => 'bar'];
        $req = new AutocompleteRequest('prompt', $sampling, $context);
        $this->assertSame('autocomplete/request', $req->method);
        $this->assertSame('2.0', $req->jsonrpc);
        $this->assertSame('prompt', $req->prompt);
        $this->assertSame($sampling, $req->sampling);
        $this->assertSame($context, $req->context);
    }

    public function testDefaults(): void
    {
        $req = new AutocompleteRequest('prompt');
        $this->assertNull($req->sampling);
        $this->assertNull($req->context);
    }
}
