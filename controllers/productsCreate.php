<?php

// echo "controller are working";
$config = require('config.php');
$db = new Database($config['database']);

// insert form body into database 

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// die();


    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $db->query(
    //         'INSERT INTO products (product_code,
    //                                     productName,
    //                                     unit,
    //                                     category,
    //                                     price, 
    //                                     tax,
    //                                     hsnCode,
    //                                     shelf_life,
    //                                     user_id ) 
    //                                     values (:product_name, :product_name,:unitMeasure,:category,:price,:tax,:hsnCode,:shelfLife)',
    //         [
    //             'product_code' => $_POST['productCode'],
    //             'productName' => $_POST['product_name'],
    //             'unit' => $_POST['unitMeasure'],
    //             'category' => $_POST['category'],
    //             'price' => $_POST['price'],
    //             'tax' => $_POST['tax'],
    //             'hsnCode' => $_POST['hsnCode'],
    //             'shelf_life' => $_POST['shelfLife'],
    //             'user_id' => 1,
    //         ]
    //     );
    // }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query(
        'INSERT INTO products (
            product_code,
            productName,
            unit,
            category,
            price, 
            tax,
            hsnCode,
            shelf_life,
            user_id
        ) 
        VALUES (
            :product_code,
            :productName,
            :unit,
            :category,
            :price,
            :tax,
            :hsnCode,
            :shelf_life,
            :user_id
        )',
        [
            'product_code' => $_POST['productCode'],
            'productName' => $_POST['product_name'],
            'unit' => $_POST['unitMeasure'],
            'category' => $_POST['category'],
            'price' => $_POST['price'],
            'tax' => $_POST['tax'],
            'hsnCode' => $_POST['hsnCode'],
            'shelf_life' => $_POST['shelfLife'],
            'user_id' => 1,
        ]
    );
}




require "./views/productsCreate.php";


