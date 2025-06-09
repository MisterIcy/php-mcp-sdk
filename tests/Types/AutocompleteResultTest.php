<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\AutocompleteResult;

/**
 * @covers \McpSdk\Types\AutocompleteResult
 */
class AutocompleteResultTest extends TestCase
{
    public function testProperties(): void
    {
        $completions = ['foo', 'bar'];
        $meta = ['baz' => 1];
        $result = new AutocompleteResult($completions, $meta);
        $this->assertSame($completions, $result->completions);
        $this->assertSame($meta, $result->_meta);
    }

    public function testMetaOptional(): void
    {
        $completions = ['foo'];
        $result = new AutocompleteResult($completions);
        $this->assertNull($result->_meta);
    }
}
