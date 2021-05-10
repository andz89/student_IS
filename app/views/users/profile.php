<?php require APPROOT . '/views/inc/header.php'; ?>
<br>
<div class="card card-body shadow-sm col-md-6 mx-auto">
        <p><strong>Username</strong>: <?php echo $_SESSION['user_name'] ?></p>
        <p><strong>Email Address</strong>: <?php echo $_SESSION['user_email'] ?></p>

        <div>
        <a class="btn btn-success btn-sm">Edit</a>
        </div>
</div>