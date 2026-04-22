<?php

// /logout the user and clear all the session storage
    echo "welcome to logout page";
$_SESSION = [];
session_destroy();

$params = session_get_cookie_params();

setcookie('PHPSESSID', '', time() - 3600, $params[$path], $param['domain'], $param['secure'], $params['httponly']);

    header('location: /login');

    exit();

?>