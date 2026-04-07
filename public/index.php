<?php

header('Content-Type: application/json');

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/users') {
    echo json_encode([
        [
            'id' => 1,
            'name' => 'Ivan Petrov',
            'email' => 'ivan@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Anna Sidorova',
            'email' => 'anna@example.com'
        ]
    ]);
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not found']);