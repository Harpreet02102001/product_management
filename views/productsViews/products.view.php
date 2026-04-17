<?php
require "./views/partials/header.php";
require "./views/partials/sidebar.php";
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Products Table</h2>
        <button class="btn btn-primary m-3"><a class="text-white " href="/products/create">Add Products</a></button>
    </div>
    <table class="table table-bordered text-nowrap tecenter">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Code</th>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Category</th>
                <th>Price</th>
                <th>Tax</th>
                <th>HSN</th>
                <th>Life</th>
                <th>User_id</th>
                <!-- <th>Create_at</th>
                <th>Updated_at</th> -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($products as $product): ?>
              <tr>
                <td> <?= $product['id'] ?> </td>
                <td> <?= $product['product_code'] ?> </td>
                <td> <?= $product['productName'] ?> </td>
                <td> <?= $product['unit'] ?> </td>
                <td> <?= $product['category'] ?> </td>
                <td> <?= $product['price'] ?> </td>
                <td> <?= $product['tax'] ?> </td>
                <td> <?= $product['hsnCode'] ?> </td>
                <td> <?= $product['shelf_life'] ?> </td>
                <td> <?= $product['user_id'] ?> </td>
                <!-- <td> <?= $product['create_at'] ?> </td> -->
                <!-- <td> <?= $product['updated_at'] ?> </td> -->
                <td>
                    <button class="btn btn-warning">Update</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
                </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>1</td>
                <td>Milk</td>
                <td>Food</td>
                <td>Liquid</td>
            </tr> -->

        </tbody>
    </table>
</div>

<?php
require "./views/partials/footer.php";
?>