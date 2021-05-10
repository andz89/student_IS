<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/classes" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

<div class="">
<a href="<?php echo URLROOT; ?>/classes/addStudent/<?php echo $data['class']->id; ?>" class="btn btn-primary btn-sm pull-right">
    <i class="fa fa-pencil"></i> Add Student
</a>
</div>
<br>
<h1><?php echo $data['class']->grade; ?></h1>


<div class="bg-secondary text-white p-2 mb-3">
  Class Adviser <?php echo $data['class']->teacher; ?> on <?php echo $data['class']->created_at; ?>
</div>

<table class="table table-striped table-hover border">
        <thead class="bg-dark text-light" >
        <tr>
            <th class="col">First Name</th>
            <th class="col">Last Name</th>
        </tr>
        </thead>

        <tbody>
     <?php foreach($data['student'] as $student) {?>
        <tr>
        <td> <?php echo $student->name; ?></td>
        <td><?php echo $student->lastName; ?></td>  
        </tr>
        </tbody>
        <?php }?>
</table>

<?php require APPROOT . '/views/inc/footer.php'; ?>