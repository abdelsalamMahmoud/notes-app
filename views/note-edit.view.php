<?php
    require "partials/head.php"; 
    require "partials/header.php";
    $message = "Edit note";
    require "partials/main.php"; 
    ?>
    <form action="../controllers/note-update.php" method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id']?>">
        <label for="body">note description</label>
        <div>
        <textarea name="body" id="body" cols="30" rows="10"><?=$note['body']?></textarea>
        <?php if(isset($errors['body'])) :?>
            <p style = "color:red; margin-top:10px; font-size:14px;"><?=$errors['body']; ?></p>
        <?php endif; ?>
        </div>
        <div class="optionss">
        <a href="../controllers/notes.php" class="cancelbtn">Cancel</a>
            <button type="submit" class="updatebtn">update</button>
        </div>
    </form>
    


<?php require "partials/footer.php"; ?> 