<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\BaseRequestParams;
use McpSdk\Types\RequestMeta;

/**
 * @covers \McpSdk\Types\BaseRequestParams
 * @covers \McpSdk\Types\RequestMeta
 */
class BaseRequestParamsTest extends TestCase
{
    public function testWithMeta(): void
    {
        $meta = new RequestMeta();
        $params = new BaseRequestParams($meta);
        $this->assertSame($meta, $params->_meta);
    }

    public function testWithoutMeta(): void
    {
        $params = new BaseRequestParams();
        $this->assertNull($params->_meta);
    }
}
