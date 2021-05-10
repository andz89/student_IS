<?php require APPROOT . '/views/inc/header.php';?>
<br>

<div class="row">
<?php flash('class_message'); ?>

</div>
<div class="row bg-light add-post-icon">

    <div>
    <h1>Class</h1>
    </div>
 
        <div>
        <a href="<?php echo URLROOT; ?>/classes/add" class="btn btn-primary btn-sm">
            <i class="fa fa-pencil"></i> Add Class
        </a>
        </div>
</div> 
<br>
<div class="row ">
<?php foreach($data['class'] as $class) {?>
    <div class="card card-body shadow-sm mb-4">
    <h4 class="grade" >
    <a class="text-dark" href="<?php echo URLROOT; ?>/classes/grade/<?php echo $class->id; ?>">
    <?php echo $class->grade; ?>
    </a></h4>
    <p class="lead"><strong>Teacher:</strong> <?php echo $class->teacher; ?></p>
    <div >
    
    <a href="<?php echo URLROOT; ?>classes/edit/<?php echo $class->id; ?>" class="btn btn-dark">Edit</a>
    <form class="d-inline-block" action="<?php echo URLROOT; ?>/classes/delete/<?php echo $class->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
    </div>
    </div>


    <?php }?>
</div>