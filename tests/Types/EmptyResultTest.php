<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * @covers \McpSdk\Types\EmptyResult
 */
class EmptyResultTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \McpSdk\Types\Result
     */
    public function testConstruction(): void
    {
        $result = new EmptyResult();
        $this->assertNotNull($result); // Construction only
    }
}
