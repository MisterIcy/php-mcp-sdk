<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Tool;
use McpSdk\Types\PromptArgument;

/**
 * @covers \McpSdk\Types\Tool
 * @covers \McpSdk\Types\PromptArgument
 */
class ToolTest extends TestCase
{
    public function testProperties(): void
    {
        $params = [new PromptArgument('arg1', 'desc', true)];
        $tool = new Tool('mytool', 'desc', $params);
        $this->assertSame('mytool', $tool->name);
        $this->assertSame('desc', $tool->description);
        $this->assertSame($params, $tool->parameters);
    }
}
