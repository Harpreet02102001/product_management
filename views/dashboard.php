<?php

require './controllers/authControllers/auth.php';
require "./views/partials/header.php";
require "./views/partials/sidebar.php";

echo "<pre>";
    var_dump($_SESSION);
echo "</pre>";
 ?>

<h1 class="text-center">
    welcome <?= $_SESSION["user"]["name"] ?? 'Guest' ?>
</h1>

<?php require "./views/partials/footer.php"; ?>