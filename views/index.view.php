 <?php session_start();?>
    <?php require "partials/head.php"; ?> 
    <?php require "partials/header.php";?>
        <?php  
             if(isset($_SESSION['user'])):?>
             <p style ="font-size:25px;">hello <span style = "color :yellow;"><?= $_SESSION['user'] ?></span></p>
             <?php endif;?>
    <?php $message="welcome in Notes app where you can keep your all ideas"; ?>
    <?php require "partials/main.php"; ?> 
    <?php require "partials/footer.php"; ?> 