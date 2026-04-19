<?php require "./views/partials/header.php";  ?>
<?php require "./views/partials/sidebar.php" ?>



<h2><?php $heading  ?></h2>



<!-- main content ends here -->
<!--   require "./views/user-create.php";  -->
<!-- <main> -->
    <section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class=" gx-lg-5 align-items-center">

  
        <div class="col-lg-6 mb-5 mb-lg-0">

          <h1>Create New User</h1>

          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="#" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example1">Name</label>
                      <input type="text" id="form3Example1" name="name" class="form-control" />
                      <?php if (isset($errors['name'])) : ?>
                        <span class="text-danger"><?= $errors['name'] ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example2">Login ID</label>
                      <input type="text" id="form3Example2" name="loginId" class="form-control" />
                        <?php if (isset($errors['loginId'])) : ?>
                        <span class="text-danger"><?= $errors['loginId'] ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" name="mail" class="form-control" />
                  <?php if (isset($errors['mail'])) : ?>
                    <span class="text-danger"><?= $errors['mail'] ?></span>
                  <?php endif; ?>
                </div>
                <!--  -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example1">Mobile Number </label>
                      <input type="text" id="form3Example1" name="mobileNo" class="form-control" />
                       <?php if (isset($errors['mobileNo'])) : ?>
                        <span class="text-danger"><?= $errors['mobileNo'] ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form3Example2">Department</label>
                        <select class="form-select" name="department" aria-label="Default select example">
                          <option disabled>Select Department</option>
                          <option value="sale">Sale</option>
                          <option value="godown">Godown</option>
                          <option value="accounts">Accounts</option>
                          <option value="IT">IT</option>
                        </select>
                        <?php if (isset($errors['department'])) : ?>
                        <span class="text-danger"><?= $errors['department'] ?></span>
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Role for user input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Select User</label>
                  <select class="form-select" name="role" aria-label="Default select example">
                    <option selected>Select Role</option>
                    <option value="1">Manager</option>
                    <option value="1">Executive</option>
                    <option value="1">Admin</option>
                    <option value="1">User</option>
                  </select>
                   <?php if (isset($errors['role'])) : ?>
                        <span class="text-danger"><?= $errors['role'] ?></span>
                      <?php endif; ?>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" id="form3Example4" class="form-control" />
                   <?php if (isset($errors['password'])) : ?>
                        <span class="text-danger"><?= $errors['password'] ?></span>
                      <?php endif; ?>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Status</label>
                  <select class="form-select" name="status" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                   <?php if (isset($errors['status'])) : ?>
                        <span class="text-danger"><?= $errors['status'] ?></span>
                      <?php endif; ?>
                </div>

                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                  Create User
                </button>

                <!-- Register buttons -->

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

    </div>
    </div>



    <?php
    require "./views/partials/footer.php";
    ?>