<?php
// echo "controller are working";
$config = require('config.php');

$db = new Database($config['database']);


$users = $db->query('select * from users')->fetchAll();

session_start();

$_SESSION['name'] = 'harpreet';

// echo"<pre>";
// var_dump($users);
// echo"</pre>";

require "./views/usersViews/users.view.php"  ;

