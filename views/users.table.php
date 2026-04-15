<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Users Table</h2>
        <button class="btn btn-primary m-3"><a class="text-white " href="/new_user">Add New User</a></button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created_At</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['mail'] ?></td>
                    <td><?= $user['role_id'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                     <td>
                    <button class="btn btn-warning">Update</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
                <?php endforeach;  ?>
               


        </tbody>
    </table>
</div>