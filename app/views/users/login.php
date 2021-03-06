<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container text-dark pt-5">
        <div class="col-md-4 mx-auto">
          <div class="card card-body bg-light mt-5">
            <div class="text-center">
                <h2>Student Information System</h2>
                <p>Please fill in your credentials to log in</p>
            </div>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
            <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group mb-3">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
              
              <div class="row">
                <div class="col">
                  <input type="submit" value="Login" class="btn btn-primary ">
                  <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>