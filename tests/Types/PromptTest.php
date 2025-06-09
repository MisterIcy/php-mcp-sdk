<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\Prompt;
use McpSdk\Types\PromptArgument;

/**
 * @covers \McpSdk\Types\Prompt
 * @covers \McpSdk\Types\PromptArgument
 */
class PromptTest extends TestCase
{
    public function testAllProperties(): void
    {
        $arg = new PromptArgument('foo', 'desc', true);
        $prompt = new Prompt('p', 'd', [$arg]);
        $this->assertSame('p', $prompt->name);
        $this->assertSame('d', $prompt->description);
        $this->assertSame([$arg], $prompt->arguments);
    }
    public function testDefaults(): void
    {
        $prompt = new Prompt('bar');
        $this->assertSame('bar', $prompt->name);
        $this->assertNull($prompt->description);
        $this->assertNull($prompt->arguments);
    }
}
