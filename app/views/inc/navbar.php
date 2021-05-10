
<nav>
    <div class="div-container">
        <div class="logo">
            <h4><a href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a></h4>
        </div>
        <ul class="nav-links">
          
     
            <?php if(isset($_SESSION['user_id'])) : ?>
            <li><a href="<?php echo URLROOT; ?>/dashboard/index">Dashboard</a></li>
           
           <li><a class="" href="<?php echo URLROOT; ?>/classes/index">Classes</a></li> 
           <li><a class="" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li> 
           <li class="px-2 py-1 bg-light "><a class="text-dark" href="<?php echo URLROOT; ?>/users/profile">Hello Teacher <?php echo $_SESSION['user_name'] ?>!</a></li>

            <?php else : ?>

            <li><a href="<?php echo URLROOT; ?>/users/register">Register</a></li>
            <li> <a class="" href="<?php echo URLROOT; ?>/users/login">Login</a></li>
             
            <?php endif; ?>
        </ul>


        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
</nav>

