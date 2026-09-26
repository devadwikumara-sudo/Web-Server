<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {

    echo "<h1>Request menggunakan GET</h1>";

} elseif ($method === 'POST') {

    echo "<h1>Request menggunakan POST</h1>";

} else {

    echo "<h1>Method: " . htmlspecialchars($method) . "</h1>";

}