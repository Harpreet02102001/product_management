<?php
require 'Validator.php';
$config = require('config.php');
$db = new Database($config['database']);

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        //     die();
        // var_dump($error);exit;




// insert data into users tables
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = [];
    if (! Validator::name($_POST['name'], 1, 10)) {
        $error['name'] = 'Enter Valid Name';
    }
    if(! Validator::mail($_POST['mail'],1, 30 )){
        $error['mail']  = 'Enter Valid Mail Id';
    }
    if(! Validator::loginId($_POST['loginId'],1,30)){
        $error['loginId']  = 'Enter Valid Login ID';
    }
    if(! Validator::mobileNo($_POST['mobileNo'],1,10)){
        $error['mobileNo']  = 'Enter Valid Mobile No';
    }
    if(! Validator::department($_POST['department'],1,10)){
        $error['department']  = 'Enter Valid Department';
    }
    if(! Validator::role($_POST['role'],1,10)){
        $error['role']  = 'Enter Valid role';
    }
    if(! Validator::password($_POST['password'],1,10)){
        $error['password']  = 'Enter Valid password No';
    }
    if(! Validator::status($_POST['status'],1,10)){
        $error['status']  = 'Enter Valid status';
    }


    if  (empty($error)) {
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
                'password' => $_POST['password'],
                'status' => $_POST['status'],
            ]
        );
        header('location: /users');
    }
}

require "./views/usersViews/userCreate.view.php";
// require "./views/usersViews/userCreate.view.php";
