<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use McpSdk\Types\ResourceTemplate;

/**
 * @covers \McpSdk\Types\ResourceTemplate
 */
class ResourceTemplateTest extends TestCase
{
    public function testProperties(): void
    {
        $tpl = new ResourceTemplate('file://{name}', 'File', 'desc', 'text/plain');
        $this->assertSame('file://{name}', $tpl->uriTemplate);
        $this->assertSame('File', $tpl->name);
        $this->assertSame('desc', $tpl->description);
        $this->assertSame('text/plain', $tpl->mimeType);
    }
    public function testDefaults(): void
    {
        $tpl = new ResourceTemplate('file://{id}', 'ID');
        $this->assertSame('file://{id}', $tpl->uriTemplate);
        $this->assertSame('ID', $tpl->name);
        $this->assertNull($tpl->description);
        $this->assertNull($tpl->mimeType);
    }
}
