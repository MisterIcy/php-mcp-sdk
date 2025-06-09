<?php

declare(strict_types=1);

namespace McpSdk\Types;

/**
 * Request sent from the client to the server to begin initialization.
 */
class InitializeRequest extends Request
{
    public ?string $protocolVersion;
    public ?ClientCapabilities $capabilities;
    public ?Implementation $clientInfo;

    public function __construct(
        ?string $protocolVersion = null,
        ?ClientCapabilities $capabilities = null,
        ?Implementation $clientInfo = null
    ) {
        parent::__construct('initialize');
        $this->protocolVersion = $protocolVersion;
        $this->capabilities = $capabilities;
        $this->clientInfo = $clientInfo;
    }
}
