<?php
    require "partials/head.php"; 
    require "partials/header.php";
    require "partials/main.php"; ?>
    <p>
        <a href="../controllers/notes.php">go back..</a>
    </p>
    <p style ="font-size:30px;"><?=htmlspecialchars($note['body'])?></p>

    <div class ="options">
    <a href="../controllers/note-edit.php?id=<?=$note['id']?>" class="editbtn">edit</a>

    <form action="" method = "post">
    <input type="hidden" name="id" value="<?= $note['id']?>">
            <button type="submit"class="deletebtn">Delete</button>
    </form>

    </div>
<?php require "partials/footer.php"; ?> 