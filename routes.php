<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// echo "$uri  <br>";

$routes = [
    '/'        => 'controllers/index.php',
    '/login'    => './controllers/login.php',
    '/signup'    => './controllers/signup.php',


];

function routesToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routesToController($uri, $routes);

function abort($code = 400)
{
    http_response_code(400);

    echo " <br> invalid url";
    die();
}
