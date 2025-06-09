<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CreateMessageRequest
 * @covers \McpSdk\Types\CreateMessageRequestParams
 * @covers \McpSdk\Types\SamplingMessage
 * @covers \McpSdk\Types\TextContent
 */
class CreateMessageRequestTest extends TestCase
{
    public function testConstruction(): void
    {
        $msg = new SamplingMessage('assistant', new TextContent('hi'));
        $params = new CreateMessageRequestParams([
            $msg
        ], 32, 'sys', 'allServers', 0.7, ['stop'], ['meta' => 1], null);
        $req = new CreateMessageRequest($params);
        $this->assertSame('sampling/createMessage', $req->method);
        $this->assertSame($params, $req->params);
    }
}

/**
 * @covers \McpSdk\Types\CreateMessageRequestParams
 */
class CreateMessageRequestParamsTest extends TestCase
{
    public function testConstruction(): void
    {
        $msg = new SamplingMessage('user', new TextContent('foo'));
        $params = new CreateMessageRequestParams([
            $msg
        ], 16);
        $this->assertCount(1, $params->messages);
        $this->assertSame(16, $params->maxTokens);
        $this->assertNull($params->systemPrompt);
        $this->assertNull($params->includeContext);
        $this->assertNull($params->temperature);
        $this->assertNull($params->stopSequences);
        $this->assertNull($params->metadata);
        $this->assertNull($params->modelPreferences);
    }
}
