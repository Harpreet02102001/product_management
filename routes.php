<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo "$uri  <br>";

$routes = [
    '/'                  => './views/dashboard.php',
    '/login'             => './controllers/login.php',
    '/signup'            => './controllers/signup.php',
    '/browser'           => './controllers/session.php',

    //routes for users control
    '/users'             => './controllers/usersControllers/users.php',                  //to show users listting
    '/new_user'      => './controllers/usersControllers/users-create.php',           //to creare new user

    //routes for users control
    '/products'          => './controllers/productsControllers/products.php',                //to just show products
    '/products/create'   => './controllers/productsControllers/productsCreate.php',         // to create new product

    //routes fo env files 
    '/env'               => './env.php',


    // '/users/create'      => './controllers/usersControllers/users-create.php',           //to creare new user
    // extra routes
    // '/new_user'          => './controllers/usersControllers/index.php',
    // '/new_user'          => './controllers/usersControllers/index.php',

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

function abort($code = 404)
{
    http_response_code(404);

    echo " <br> invalid url";
    die();
}
