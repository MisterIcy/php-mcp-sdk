<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use MisterIcy\PhpMcpSdk\Message\Request;
use MisterIcy\PhpMcpSdk\Message\Notification;
use MisterIcy\PhpMcpSdk\Common\NonEmptyString;
use MisterIcy\PhpMcpSdk\Common\Number;

class ReferenceClient
{
    public function sendRequest(string $method, array $params = [], int|string $id = 1): string
    {
        $idObj = is_int($id) ? new Number($id) : new NonEmptyString($id);
        $request = new Request($idObj, new NonEmptyString($method), $params);
        return json_encode($request, JSON_THROW_ON_ERROR);
    }

    public function sendNotification(string $method, array $params = []): string
    {
        $notification = new Notification(new NonEmptyString($method), $params);
        return json_encode($notification, JSON_THROW_ON_ERROR);
    }
}

// Example usage:
// $client = new ReferenceClient();
// echo $client->sendRequest('sum', [1,2,3], 42);
// echo $client->sendNotification('notify', ['foo' => 'bar']);
