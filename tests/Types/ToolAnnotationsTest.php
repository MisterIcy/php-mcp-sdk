<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * @covers \McpSdk\Types\ToolAnnotations
 */
class ToolAnnotationsTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruction(): void
    {
        $ann = new ToolAnnotations('title', true, false, true, false);
        $this->assertSame('title', $ann->title);
        $this->assertTrue($ann->readOnlyHint);
        $this->assertFalse($ann->destructiveHint);
        $this->assertTrue($ann->idempotentHint);
        $this->assertFalse($ann->openWorldHint);
    }
}
