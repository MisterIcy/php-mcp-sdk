<?php

declare(strict_types=1);

namespace MisterIcy\PhpMcpSdk\Message;

use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;
use MisterIcy\PhpMcpSdk\Message\Error;
use MisterIcy\PhpMcpSdk\Message\Request;
use MisterIcy\PhpMcpSdk\Message\Response;
use MisterIcy\PhpMcpSdk\Message\Notification;

final class MessageFactory
{
    /**
     * @param string $json JSON-RPC 2.0 string
     * @return JsonRpcMessageInterface
     * @throws \InvalidArgumentException
     * @throws \JsonException
     */
    public static function fromJson(string $json): JsonRpcMessageInterface
    {
        /** @var array<string, mixed> $data */
        $data = json_decode($json, true, flags: JSON_THROW_ON_ERROR);
        if (!isset($data['jsonrpc']) || $data['jsonrpc'] !== JsonRpcMessageInterface::JSON_RPC_VERSION) {
            throw new \InvalidArgumentException('Invalid or missing jsonrpc version');
        }
        if (isset($data['method'])) {
            // Notification or Request
            $id = $data['id'] ?? null;
            $method = new NonEmptyString($data['method']);
            $params = $data['params'] ?? null;
            if ($id === null) {
                // Notification
                return new Notification($method, $params);
            } else {
                // Request
                return new Request(self::parseId($id), $method, $params);
            }
        } elseif (isset($data['result']) || isset($data['error'])) {
            // Response
            $id = self::parseId($data['id'] ?? null);
            $error = null;
            $result = null;
            if (isset($data['error'])) {
                $errorData = $data['error'];
                $error = new Error(
                    new Number($errorData['code']),
                    new NonEmptyString($errorData['message']),
                    $errorData['data'] ?? null
                );
            }
            if (isset($data['result'])) {
                $result = $data['result'];
            }
            return new Response($id, $error, $result);
        }
        throw new \InvalidArgumentException('Unknown message type');
    }

    private static function parseId($id): NonEmptyString|Number
    {
        if (is_int($id)) {
            return new Number($id);
        }
        if (is_string($id)) {
            return new NonEmptyString($id);
        }
        throw new \InvalidArgumentException('Invalid id type');
    }
}
