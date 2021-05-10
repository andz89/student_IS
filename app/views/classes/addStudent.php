<?php require APPROOT . '/views/inc/header.php';?>
<br>
<br>
<div class="card card-body bg-light col-md-8 mx-auto">
    <div>
        <h4>Add Student</h4>
    </div>
  <form action="<?php echo URLROOT; ?>/classes/addStudent/<?php echo $data['class_id']->id; ?>" method="post">

    <div class="form-group ">
    <label for="name">Name <sup>*</sup></label>
    <input type="text" name="name" class="form-control form-control-lg  <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['name']; ?>" >
    <span class="invalid-feedback"> <?php echo $data['name_err']; ?> </span>
    </div>
    <br>
    <div class="form-group mb-3">
    <label for="lastName">Class Adviser <sup>*</sup></label>
    <input type="text" name="lastName" class="form-control form-control-lg  <?php echo (!empty($data['lastName_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['lastName']; ?>"> 
    <span class="invalid-feedback"><?php echo $data['lastName_err']; ?></span>

    </div>

    <div class="row">
    <div class="col">
    <input type="submit" value="Submit" class="btn btn-primary ">

    </div>
    </div>

  </form>
</div> 
