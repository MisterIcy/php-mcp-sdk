<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Tests\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Message\Request;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MisterIcy\PhpMcpSdk\Message\Request
 * @uses \MisterIcy\PhpMcpSdk\Common\NonEmptyString
 * @uses \MisterIcy\PhpMcpSdk\Common\Number
 */
final class RequestTest extends TestCase
{
    public function testCreateWithValidIdMethodAndParams(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];
        $request = new Request($id, $method, $params);
        $this->assertSame('123', $request->getId()->getValue());
        $this->assertSame('testMethod', $request->getMethod()->getValue());
        $this->assertSame($params, $request->getParams());
    }

    public function testCreateWithNumberId(): void
    {
        $id = new Number(123);
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];
        $request = new Request($id, $method, $params);
        $this->assertSame(123, $request->getId()->getValue());
        $this->assertSame('testMethod', $request->getMethod()->getValue());
        $this->assertSame($params, $request->getParams());
    }

    public function testJsonSerialize(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];
        $request = new Request($id, $method, $params);

        $expectedJson = [
            'jsonrpc' => Request::JSON_RPC_VERSION,
            'id' => '123',
            'method' => 'testMethod',
            'params' => $params,
        ];

        $this->assertSame($expectedJson, $request->jsonSerialize());
    }

    public function testJsonSerializeWithoutParams(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $request = new Request($id, $method);

        $expectedJson = [
            'jsonrpc' => Request::JSON_RPC_VERSION,
            'id' => '123',
            'method' => 'testMethod',
            'params' => [],
        ];

        $this->assertSame($expectedJson, $request->jsonSerialize());
    }

    public function testGetId(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $request = new Request($id, $method);

        $this->assertSame('123', $request->getId()->getValue());
    }

    public function testGetMethod(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $request = new Request($id, $method);

        $this->assertSame('testMethod', $request->getMethod()->getValue());
    }

    public function testGetParams(): void
    {
        $id = new NonEmptyString('123');
        $method = new NonEmptyString('testMethod');
        $params = ['param1' => 'value1', 'param2' => 'value2'];
        $request = new Request($id, $method, $params);

        $this->assertSame($params, $request->getParams());
    }

    public function testCreateWithInvalidMethodThrowsException(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Method names cannot start with "rpc."');

        new Request(new NonEmptyString('123'), new NonEmptyString('rpc.invalidMethod'));
    }
}
