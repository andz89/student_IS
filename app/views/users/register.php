
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="col-md-4 mx-auto text-dark">
          <div class="card card-body bg-light mt-5">
              <div class="text-center text-dark">
                <h2>Student Information System</h2>
                <h5>Create An Account</h5>
                <p>Please fill out this form to register with us</p>
              </div>
           
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
              </div>
              <div class="form-group mt-3">
                <label for="email">Use registered email from your School <sup>*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
              </div>
              <div class="form-group mt-3">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
              </div>
              <div class="form-group mt-3">
                <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
              </div>
    
              <div class="row mt-3">
                <div class="col">
                  <input type="submit" value="Register" class="btn btn-primary btn-block">
                  <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                </div>
            
                
            
              </div>
          </div>
        </div>