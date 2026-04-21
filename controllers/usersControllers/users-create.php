<?php
require 'Validator.php';
$config = require('config.php');
$db = new Database($config['database']);

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();
// var_dump($error);exit;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name       = $_POST['name'];
    $loginId    = $_POST['loginId'];
    $mail       = $_POST['mail'];
    $mobileNo   = $_POST['mobileNo'];
    $department = $_POST['department'];
    $role       = $_POST['role'];
    $password   = $_POST['password'];
    $status     = $_POST['status'];

    $errors = [];

    if (! Validator::name($name)) {
        $errors['name'] = 'Please provide the valid Name';
    }
    if (! Validator::mail($mail)) {
        $errors['mail'] = 'Please provide Valid Email Address';
    }
    if (! Validator::role($role)) {
        $errors['role'] = 'Please provide valid Role';
    }
    if (! Validator::loginId($loginId, 1, 20)) {
        $errors['loginId'] = 'Please provide valid log Id';
    }
    if (! Validator::mobileNo($mobileNo, 1, 10)) {
        $errors['mobileNo'] = 'Please provide valid Mobile No';
    }
    if (! Validator::department($department)) {
        $errors['department'] = 'Please provide valid Department';
    }
    if (! Validator::password($password)) {
        $errors['password'] = 'Provide Password of at least of Seven Characters';
    }
    if (! Validator::status($status)) {
        $errors['status'] = 'Please provide valid Status';
    }


    if (! empty($errors)) {
        require './views/usersViews/userCreate.view.php';
    }

    // $db  = App::resolve(Database::class);
    $users = $db->query(
        'SELECT * FROM users WHERE mail = :mail',
        [
            'mail' => $mail

        ]
    )->fetch();

    if ($users) {
        $errors['mail'] = 'Email already exists';
        require './views/usersViews/userCreate.view.php';
        exit();
    } else {
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
                'mobileNo' => $_POST['mobileNo'],
                'department' => $_POST['department'],
                'role_id' => $_POST['role'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'status' => $_POST['status'],   
            ]
        );
    }

    // echo "<pre>";
    // var_dump($users);
    // echo "</pre>";

    header('Location: /users');
    exit();
}
require "./views/usersViews/userCreate.view.php";
