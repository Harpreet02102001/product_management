<?php
// echo "controller are working";
$config = require('config.php');

$db = new Database($config['database']);

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $db->query('delete from users where id = :id', [
        'id' => $_POST['id']
    ]);
}else{
    // echo"<pre>";
    // var_dump($db_error);
    // echo"</pre>";

}


    $users = $db->query('select * from users')->fetchAll();

session_start();

$_SESSION['name'] = 'harpreet';

// echo"<pre>";
// var_dump($users);
// echo"</pre>";




require "./views/usersViews/users.view.php";
