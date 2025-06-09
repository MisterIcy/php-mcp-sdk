<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\TextContent;

/**
 * @covers \McpSdk\Types\TextContent
 */
class TextContentTest extends TestCase
{
    public function testProperties(): void
    {
        $tc = new TextContent('hello');
        $this->assertSame('text', $tc->type);
        $this->assertSame('hello', $tc->text);
    }
}
