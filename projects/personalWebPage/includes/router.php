<?php

declare(strict_types=1);

const ALLOWED_METHODS = ['GET', 'POST'];
const INDEX_URI = '';
const INDEX_ROUTE = 'index';

function normalizeUri(string $uri): string
{
    $uri = strtolower(trim($uri, '/'));
    return $uri === INDEX_URI ? INDEX_ROUTE : $uri;
}

function getFilePath(string $uri, string $method): string
{
    return ROUTES_DIR . '/' . normalizeUri($uri) . '_' . strtolower($method) . '.php';
}

function notFound(): void
{
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

function dispatch(string $uri, string $method): void
{
    // normalize the URI
    $uri = normalizeUri($uri);
    $method = strtoupper($method);
    // GET|POST - return 404
    if (!in_array($method, ALLOWED_METHODS)) {
        notFound();
    }

    $filePath = getFilePath($uri, $method);

    if (file_exists($filePath)) {
        require_once $filePath;
        return;
    }

    notFound();
}
