<?php require APPROOT . '/views/inc/header.php';?>
<br>
<br>
<div class="card card-body bg-light col-md-8 mx-auto">
    <div>
        <h4>Add Class</h4>
    </div>
  <form action="<?php echo URLROOT; ?>/classes/add" method="post">

    <div class="form-group ">
    <label for="name">Grade Level and Section <sup>*</sup></label>
    <input type="text" name="grade_level" class="form-control form-control-lg  <?php echo (!empty($data['grade_level_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['grade_level']; ?>" >
    <span class="invalid-feedback"> <?php echo $data['grade_level_err']; ?> </span>
    </div>
    <br>
    <div class="form-group mb-3">
    <label for="teacher">Class Adviser <sup>*</sup></label>
    <input type="text" name="teacher" class="form-control form-control-lg  <?php echo (!empty($data['teacher_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['teacher']; ?>"> 
    <span class="invalid-feedback"><?php echo $data['teacher_err']; ?></span>

    </div>

    <div class="row">
    <div class="col">
    <input type="submit" value="Submit" class="btn btn-primary ">

    </div>
    </div>

  </form>
</div> 
