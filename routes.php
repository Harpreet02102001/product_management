<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// echo "$uri  <br>";

$routes = [
    '/'                  => './views/dashboard-products.php',
    '/login'             => './controllers/login.php',
    '/signup'            => './controllers/signup.php',
    '/browser'           => './controllers/session.php',
    '/new_user'          => './controllers/index.php',
    '/users'             => './controllers/users.php',
    '/products'          => './controllers/products.php',
    '/products/create'   => './controllers/productsCreate.php',
    '/env'               => './env.php',


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
