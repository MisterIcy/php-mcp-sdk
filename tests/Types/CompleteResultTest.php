<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\CompleteResult
 * @covers \McpSdk\Types\CompleteResultCompletion
 */
class CompleteResultTest extends TestCase
{
    public function testConstruction(): void
    {
        $comp = new CompleteResultCompletion(['a', 'b'], 2, true);
        $result = new CompleteResult($comp);
        $this->assertSame($comp, $result->completion);
    }
}

/**
 * @covers \McpSdk\Types\CompleteResultCompletion
 */
class CompleteResultCompletionTest extends TestCase
{
    public function testConstruction(): void
    {
        $comp = new CompleteResultCompletion(['x', 'y', 'z']);
        $this->assertSame(['x', 'y', 'z'], $comp->values);
        $this->assertNull($comp->total);
        $this->assertNull($comp->hasMore);
    }
}
