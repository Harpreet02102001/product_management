<?php require "./views/partials/header.php";  ?>
<?php require "./views/partials/sidebar.php";
?>


<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class=" gx-lg-5 align-items-center">


        <div class="col-lg-12 mb-5 mb-lg-0">

          <h1>Create New Product</h1>

          <div class="card">
            <div class="card-body py-5 px-md-5">
              <!-- <form action="#" method="POST"> -->
                <form method="POST" action="#">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example1">Product code</label>
                      <input type="text" id="form3Example1" name="productCode" class="form-control"  />
                      <?php if (isset($error['productCode'])) : ?>
                        <span class="text-danger"><?= $error['productCode'] ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example2">Product Name</label>
                      <input type="text" id="form3Example2" name="productName" class="form-control" />
                      <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['productName'] ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->
                <!--  -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example1">Unit Measrure(UOM)</label>
                      <input type="text" id="form3Example1" name="unitMeasure" class="form-control" />
                      <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['unitMeasure'] ?></span>
                        <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example2">Category Group</label>
                      <input type="text" id="form3Example2" name="category" class="form-control" />
                       <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['category'] ?></span>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Sale Price /MRP</label>
                  <input type="number" id="form3Example3" name="price" class="form-control" />
                   <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['price'] ?></span>
                        <?php endif; ?>
                </div>

                <!-- Role for user input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Tax/GST</label>
                  <input type="role" id="form3Example3" name="tax" class="form-control" />
                   <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['tax'] ?></span>
                        <?php endif; ?>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">HSN Code</label>
                  <input type="number" id="form3Example4" name="hsnCode" class="form-control" />
                    <?php if (isset($error['productName'])) : ?>
                        <span class="text-danger"><?= $error['hsnCode'] ?></span>
                        <?php endif; ?>
                </div>

                <!-- confirm Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Shelf Life/Expiry Tracking</label>
                  <input type="text" id="form3Example4" name="shelfLife" class="form-control" />
                  <?php if (isset($error['shelfLife'])) : ?>
                        <span class="text-danger"><?= $error['shelfLife'] ?></span>
                        <?php endif; ?>
                </div>  


                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                  Create Product
                </button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<?php require "./views/partials/footer.php";  ?>