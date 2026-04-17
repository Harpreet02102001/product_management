<?php
// echo "controller are working";
$config = require('config.php');

$db = new Database($config['database']);


$users = $db->query('select * from users')->fetchAll();

// echo"<pre>";
// var_dump($users);
// echo"</pre>";

require "./views/usersViews/users.view.php"  ;
