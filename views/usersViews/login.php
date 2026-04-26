<?php
require "./views/partials/header.php";
?>
<div class="container">
    <div class="row">
        <div class="card p-4 mt-5 col-lg-6 mx-auto">
            <h2 class="mx-auto">User Login </h2>
            <form action="/login" method="POST">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= $_POST['email']; ?>" placeholder="Enter email" name="email">
                    <?php if (isset($errors['email'])) : ?>
                        <span class="text-danger"><?= $errors['email'] ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" value="<?= $_POST['password']; ?>" placeholder="Enter password" name="pswd">
                    <?php if (isset($errors['password'])) : ?>
                        <span class="text-danger"><?= $errors['password'] ?></span>
                    <?php endif; ?>
                </div>
                <!-- <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div> -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php
require "./views/partials/footer.php"
?>