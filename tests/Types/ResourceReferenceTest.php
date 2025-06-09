<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\ResourceReference
 */
class ResourceReferenceTest extends TestCase
{
    public function testConstruction(): void
    {
        $ref = new ResourceReference('file://foo');
        $this->assertSame('ref/resource', $ref->type);
        $this->assertSame('file://foo', $ref->uri);
    }
}

/**
 * @covers \McpSdk\Types\PromptReference
 */
class PromptReferenceTest extends TestCase
{
    public function testConstruction(): void
    {
        $ref = new PromptReference('prompt1');
        $this->assertSame('ref/prompt', $ref->type);
        $this->assertSame('prompt1', $ref->name);
    }
}
