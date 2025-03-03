<?php

function dd($value) {
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    die();
}

echo $_SERVER['REQUEST_URI'];

function requestUriEquals($requestUri) {
    return $_SERVER['REQUEST_URI'] === $requestUri ? 'nav_link_active' : '';
}