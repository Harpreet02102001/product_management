
<?php

// require "./routes.php";
require "./Database.php";

 $config = require "./config.php";

$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM users")->fetchall();



echo "<pre>";
var_dump($posts);
echo "</pre>";

// foreach ($posts as $post){
//     echo "<li>" .$post. "</li>"

// }
?>

