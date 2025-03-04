<?php

function dd($value) {
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    die();
}

function requestUriEquals($requestUri) {
    return $_SERVER['REQUEST_URI'] === $requestUri ? 'nav_link_active' : '';
}