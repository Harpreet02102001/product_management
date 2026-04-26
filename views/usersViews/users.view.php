<?php require "./views/partials/header.php";  ?>
<?php require "./views/partials/sidebar.php" ?>

<h2><?= $_SESSION['email']; ?> </h2>
<!-- main content ends here -->
<main>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2>Users Table</h2>
            <a href="/new_user" class="btn btn-primary m-3 text-white">
                Add New User
            </a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role ID</th>
                    <th>Login ID</th>
                    <th>Mobile</th>
                    <th>Department</th>
                    <!-- <th>Password</th> -->
                    <th>Status</th>
                    <!-- <th>Created_At</th>
                <th>Updated_at</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['mail'] ?></td>
                        <!-- <?= $user['role_id'] ?> -->
                        <td>
                            <?php
                            if ($user['role_id'] === 1) : ?>
                                <span class="badge bg-danger"> Admin</span>
                            <?php else : ?>
                                <span class="badge bg-primary">User</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $user['loginId'] ?></td>
                        <td><?= $user['mobileNo'] ?></td>
                        <td><?= $user['department'] ?></td>
                        <!-- <td><?= $user['password'] ?></td> -->
                        <!-- <td><?= $user['status'] ?></td> -->

                        <td>
                            <?php
                            if ($user['status'] ===  "active") : ?>
                                <span class="badge bg-primary">Active</span>
                            <?php else : ?>
                                <span class="badge bg-danger">Inactive</span>
                            <?php endif; ?>
                        </td>
                        <!-- <td><?= $user['created_at'] ?></td> -->
                        <!-- <td><?= $user['updated_at'] ?></td> -->
                        <td class="row">
                            <div>
                                <form action="#" method="">
                                    <button class="btn btn-warning">Update</button>
                                </form>
                            </div>
                            <div>
                                <form action="#" method="POST" onsubmit="return confirm('Are you sure you want to remove this user?');">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach;  ?>



            </tbody>
        </table>
    </div>
</main>

</div>
</div>



<?php
require "./views/partials/footer.php";
?>