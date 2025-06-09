<?php

declare(strict_types=1);

namespace McpSdk\Types;

use PHPUnit\Framework\TestCase;

/**
 * @covers \McpSdk\Types\ModelHint
 */
class ModelHintTest extends TestCase
{
    public function testConstruction(): void
    {
        $hint = new ModelHint('gpt-4');
        $this->assertSame('gpt-4', $hint->name);
        $hint2 = new ModelHint();
        $this->assertNull($hint2->name);
    }
}

/**
 * @covers \McpSdk\Types\ModelPreferences
 */
class ModelPreferencesTest extends TestCase
{
    public function testConstruction(): void
    {
        $prefs = new ModelPreferences([new ModelHint('gpt-4')], 0.5, 0.2, 0.8);
        $this->assertIsArray($prefs->hints);
        $this->assertCount(1, $prefs->hints);
        $this->assertSame(0.5, $prefs->costPriority);
        $this->assertSame(0.2, $prefs->speedPriority);
        $this->assertSame(0.8, $prefs->intelligencePriority);
    }
}
