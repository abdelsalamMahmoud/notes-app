<?php
    require "partials/head.php"; 
    require "partials/header.php";
    $message = "create new note";
    require "partials/main.php"; ?>

    <form action="" method="post">
        <label for="body">description</label>
        <div>
        <textarea name="body" id="body" cols="30" rows="10">
            <?=$_POST['body'] ?? '' ?>
        </textarea>
        <?php if(isset($errors['body'])) :?>
            <p style = "color:red; margin-top:10px; font-size:14px;"><?=$errors['body']; ?></p>
        <?php endif; ?>
        </div>
        <p>
            <button type="submit" class="createbtn">create</button>
        </p>
    </form>
    


<?php require "partials/footer.php"; ?> 

