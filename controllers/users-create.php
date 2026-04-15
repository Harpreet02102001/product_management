<?php
// echo "controller are working";

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query(
        'INSERT INTO users (
            name,
            mail,
            role_id,
            loginId,
            mobileNo, 
            department,
            password,
            status
        ) 
        VALUES (
            :name,
            :mail,
            :role_id,
            :loginId,
            :mobileNo,
            :department,
            :password,
            :status

        )',
        [
            'name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'loginId' => $_POST['loginId'],
            'mobileNo' => $_POST['mobileNumber'],
            'department' => $_POST['department'],
            'role_id' => $_POST['role'],
            'password' => $_POST['password'],
            'status' => $_POST['status'],
        ]
    );
    header('location: /users');
}


require "./views/users.view.php";
