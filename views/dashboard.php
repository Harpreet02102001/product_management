<?php
session_start();
?>

<?php require "./views/partials/header.php"; ?>
<?php require "./views/partials/sidebar.php"; ?>
<!-- 
<?php 
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
 ?> -->

<h1 class="text-center">
    welcome <?= $_SESSION["user"]["name"] ?? 'Guest' ?>
</h1>

<?php require "./views/partials/footer.php"; ?>