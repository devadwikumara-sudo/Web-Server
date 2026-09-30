<?php
session_start();

require_once __DIR__ . '/../app/Core/Middleware/AuthMiddleware.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/acara6/public';
if (str_starts_with($uri, $base)) $uri = substr($uri, strlen($base));
if ($uri === '') $uri = '/';
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/login' && $method === 'GET') {
    (new AuthController())->loginForm();
    exit;
}
if ($uri === '/login' && $method === 'POST') {
    (new AuthController())->login();
    exit;
}
if ($uri === '/logout') {
    (new AuthController())->logout();
    exit;
}

$protected = ['/dashboard', '/mahasiswa'];
if (in_array($uri, $protected, true)) {
    (new AuthMiddleware())->handle();
}

if ($uri === '/dashboard') {
    (new HomeController())->dashboard();
} elseif ($uri === '/mahasiswa') {
    (new HomeController())->mahasiswa();
} else {
    http_response_code(404);
    echo '404';
}
