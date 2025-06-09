<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use MisterIcy\PhpMcpSdk\Message\MessageFactory;
use MisterIcy\PhpMcpSdk\Message\Request;
use MisterIcy\PhpMcpSdk\Message\Notification;
use MisterIcy\PhpMcpSdk\Message\Response;
use MisterIcy\PhpMcpSdk\Message\Error;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;

class ReferenceServer
{
    public function handle(string $json): string
    {
        try {
            $message = MessageFactory::fromJson($json);
            if ($message instanceof Request) {
                // Example: echo method name and params as result
                $result = [
                    'method' => $message->getMethod()->getValue(),
                    'params' => $message->getParams(),
                ];
                $response = new Response($message->getId(), null, $result);
                return json_encode($response, JSON_THROW_ON_ERROR);
            } elseif ($message instanceof Notification) {
                // Notifications do not require a response
                return '';
            } else {
                // Already a response, just echo
                return json_encode($message, JSON_THROW_ON_ERROR);
            }
        } catch (\Throwable $e) {
            // Return error response for requests (id may be missing)
            $id = isset($message) && $message instanceof Request ? $message->getId() : new Number(0);
            $error = new Error(new Number(-32603), new NonEmptyString($e->getMessage()));
            $response = new Response($id, $error);
            return json_encode($response, JSON_THROW_ON_ERROR);
        }
    }
}

// Example usage:
// $server = new ReferenceServer();
// $json = '{"jsonrpc":"2.0","id":1,"method":"sum","params":[1,2,3]}';
// echo $server->handle($json);
