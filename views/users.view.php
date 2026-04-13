<?php require "./views/partials/header.php";  ?>
<?php require "./views/partials/sidebar.php" ?>



            <h2><?php  $heading  ?></h2>



            <!-- main content ends here -->
            <?php
                 require "./views/users.table.php"; 
            ?>
        </main>
    </div>
</div>



<?php
require "./views/partials/footer.php";
?>