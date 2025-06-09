<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CallToolResult
 * @covers \McpSdk\Types\TextContent
 */
class CallToolResultTest extends TestCase
{
    public function testConstruction(): void
    {
        $content = [new TextContent('foo')];
        $result = new CallToolResult($content, ['foo' => 'bar'], true);
        $this->assertSame($content, $result->content);
        $this->assertSame(['foo' => 'bar'], $result->structuredContent);
        $this->assertTrue($result->isError);
    }
}

/**
 * @covers \McpSdk\Types\CompatibilityCallToolResult
 */
class CompatibilityCallToolResultTest extends TestCase
{
    public function testConstruction(): void
    {
        $content = [new TextContent('bar')];
        $compat = new CompatibilityCallToolResult($content, null, false, 'legacy');
        $this->assertSame($content, $compat->content);
        $this->assertFalse($compat->isError);
        $this->assertSame('legacy', $compat->toolResult);
    }
}
