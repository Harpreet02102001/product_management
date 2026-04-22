<?php

require './controllers/authControllers/auth.php';
?>

<?php require "./views/partials/header.php"; ?>
<?php require "./views/partials/sidebar.php"; ?>

<h1 class="text-center">
    welcome <?= $_SESSION["user"]["name"] ?? 'Guest' ?>
</h1>

<?php require "./views/partials/footer.php"; ?>