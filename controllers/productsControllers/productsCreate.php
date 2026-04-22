<?php

require './controllers/authControllers/auth.php';
require 'Validator.php';

// echo "controller are working";
$config = require('config.php');
$db = new Database($config['database']);



// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// insert form body and other input fieds into database 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    if (! Validator::productCode($_POST['productCode'], 1, 10)) {
        $error['productCode'] = 'Enter Valid Product Code';
    }
    if (! Validator::productName($_POST['productName'], 1, 255)) {
        $error['productName'] = 'Enter Valid Product Name';
    }
    if (! Validator::unitMeasure($_POST['unitMeasure'], 1, 255)) {
        $error['unitMeasure'] = 'Enter Valid Measurement Type';
    }
    if (! Validator::category($_POST['category'], 1, 255)) {
        $error['category'] = 'Enter Valid Category ';
    }
    if (! Validator::price($_POST['price'], 1, 255)) {
        $error['price'] = 'Enter Valid price ';
    }
    if (! Validator::tax($_POST['tax'], 1, 255)) {
        $error['tax'] = 'Enter Valid Tax Limit ';
    }
    if (! Validator::hsnCode($_POST['hsnCode'], 1, 255)) {
        $error['hsnCode'] = 'Enter Valid HSN Code ';
    }
    if (! Validator::hsnCode($_POST['shelfLife'], 1, 255)) {
        $error['shelfLife'] = 'Enter Valid Shelf Life ';
    }


    if (empty($error)) {
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
                'productName' => $_POST['productName'],
                'unit' => $_POST['unitMeasure'],
                'category' => $_POST['category'],
                'price' => $_POST['price'],
                'tax' => $_POST['tax'],
                'hsnCode' => $_POST['hsnCode'],
                'shelf_life' => $_POST['shelfLife'],
                'user_id' => 1,
            ]
        );

        // header('location: /products');
    }
}
require "./views//productsViews/productsCreate.php";
