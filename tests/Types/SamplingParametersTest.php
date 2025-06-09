<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\SamplingParameters;

/**
 * @covers \McpSdk\Types\SamplingParameters
 */
class SamplingParametersTest extends TestCase
{
    public function testProperties(): void
    {
        $params = new SamplingParameters(0.7, 0.9, 256, 42);
        $this->assertSame(0.7, $params->temperature);
        $this->assertSame(0.9, $params->topP);
        $this->assertSame(256, $params->maxTokens);
        $this->assertSame(42, $params->seed);
    }

    public function testDefaults(): void
    {
        $params = new SamplingParameters();
        $this->assertNull($params->temperature);
        $this->assertNull($params->topP);
        $this->assertNull($params->maxTokens);
        $this->assertNull($params->seed);
    }
}
