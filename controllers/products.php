<?php

// echo "controller are working";
$config = require('config.php');
$db = new Database($config['database']);


$products = $db->query('select * from products')->fetchAll();

// echo "<pre>";
//     var_dump($products);
// echo "</pre>";
require "./views/products.view.php";
