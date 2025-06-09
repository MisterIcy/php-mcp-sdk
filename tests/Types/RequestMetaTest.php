<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\RequestMeta;
use McpSdk\Types\ProgressToken;

/**
 * @covers \McpSdk\Types\RequestMeta
 * @covers \McpSdk\Types\ProgressToken
 */
class RequestMetaTest extends TestCase
{
    public function testWithProgressToken(): void
    {
        $token = new ProgressToken('token');
        $meta = new RequestMeta($token);
        $this->assertSame($token, $meta->progressToken);
    }

    public function testWithoutProgressToken(): void
    {
        $meta = new RequestMeta();
        $this->assertNull($meta->progressToken);
    }
}
