<?php


require './controllers/authControllers/auth.php';   //check the session first after that assign him access of routes
// echo "controller are working";
$config = require('config.php');
$db = new Database($config['database']);


$products = $db->query('select * from products')->fetchAll();

// echo "<pre>";
//     var_dump($products);
// echo "</pre>";
require "./views/productsViews/products.view.php";
