<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * The server's response to an initialize request from the client.
 */
class InitializeResult extends Result
{
    public string $protocolVersion;
    public ServerCapabilities $capabilities;
    public Implementation $serverInfo;
    public ?string $instructions;

    public function __construct(
        string $protocolVersion,
        ServerCapabilities $capabilities,
        Implementation $serverInfo,
        ?string $instructions = null,
        ?array $_meta = null
    ) {
        parent::__construct($_meta);
        $this->protocolVersion = $protocolVersion;
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
        $this->instructions = $instructions;
    }
}
