<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/books' => 'controllers/books.php'
];

initRoutes($uri, $routes);

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.view.php";

    die();
}

function initRoutes($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
