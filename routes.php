<?php

session_start();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo "$uri  <br>";

$routes = [

    '/'  => './views/dashboard.php',
    // '/'  => [
    //     'file' => './views/dashboard.php',
    //     'roles' => ['admin', 'user']
    // ],
    '/signup'            => './controllers/signup.php',

    '/browser'           => './controllers/session.php',

    //routes for users control
    //to show users listting
    '/users'  => [
        'file' => './controllers/usersControllers/users.php',
        'roles' => [1]
    ],

    '/new_user'          => './controllers/usersControllers/users-create.php',           //to creare new user
    '/login'             => './controllers/usersControllers/login-user.php',           //to creare new user
    '/logout'             => './controllers/authControllers/logout.php',           //to creare new user

    //routes for users control
    '/products'          => './controllers/productsControllers/products.php',                //to just show products
    '/products/create'   => './controllers/productsControllers/productsCreate.php',         // to create new product

    //routes fo env files 
    // '/env'               => './env.php',

];


// to check user have access to hit this routesToController
function checkUser($allowedRoles)
{
    if (empty($allowedRoles)) {
        return true;
    }

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $roleId = $_SESSION['user']['role'];    

    // return in_array($roleId, $allowedRoles);
    return in_array($_SESSION['user']['role'], $allowedRoles);
}

//this function check the uri exist or not , if exist than redirect to route else abort`
// function routesToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require $routes[$uri];
//     } else {
//         abort();
//     }
// }

function routesToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        abort();
    }

    $route = $routes[$uri];

    if (is_array($route)) {

        if (!checkUser($route['roles'])) {
            abort(403);
        }

        require $route['file'];
    } else {
        require $route;
    }
}
routesToController($uri, $routes);


// this function show abort error

function abort($code = 404)
{
    http_response_code($code);

     if ($code === 403) {
        echo "<br> Forbidden - You don't have access";
    } else {
        echo "<br> Invalid URL";
    }
    die();
}
