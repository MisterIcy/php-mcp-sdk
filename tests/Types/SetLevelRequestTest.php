<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\SetLevelRequest
 * @covers \McpSdk\Types\SetLevelRequestParams
 */
class SetLevelRequestTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new SetLevelRequestParams('info');
        $req = new SetLevelRequest($params);
        $this->assertSame('logging/setLevel', $req->method);
        $this->assertSame($params, $req->params);
    }
}

/**
 * @covers \McpSdk\Types\SetLevelRequestParams
 */
class SetLevelRequestParamsTest extends TestCase
{
    public function testConstruction(): void
    {
        $params = new SetLevelRequestParams('debug');
        $this->assertSame('debug', $params->level);
    }
}
