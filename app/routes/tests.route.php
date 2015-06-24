<?php


$app->map('/say-hello', function () use ($app) {
    $name = $app->request->params('name');
    $response = $name ? 'Hello ' . $name : 'Missing parameter for name';
    $app->response->write($response);
})->via('POST', 'PUT');