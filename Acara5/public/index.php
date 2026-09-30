<?php

require_once __DIR__ . '/../routes/web.php';

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';

use App\Controllers\HomeController;
use App\Controllers\MahasiswaController;


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/si-akademik/Acara5/public';

if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}

if ($uri === '' || $uri === false) {
    $uri = '/';
}

if ($uri !== '/') {
    $uri = rtrim($uri, '/');
}


$method = $_SERVER['REQUEST_METHOD'];



// TUGAS MANDIRI mahasiswa/5 //

if ($method === 'GET' && preg_match('#^/mahasiswa/([0-9]+)$#', $uri, $matches)) {

    $controller = new MahasiswaController();

    $controller->show($matches[1]);

    exit;
}

if (isset($routes[$method][$uri])) {

    [$controllerName, $action] = $routes[$method][$uri];

    $controllerClass = "App\\Controllers\\{$controllerName}";

    $controller = new $controllerClass();

    $controller->$action();

    exit;
}

http_response_code(404);

echo "<h1>404 - Halaman Tidak Ditemukan</h1>";
echo "<p>URL <strong>" . htmlspecialchars($uri) . "</strong> tidak tersedia.</p>";