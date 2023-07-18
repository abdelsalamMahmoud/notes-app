<?php 
    require "partials/head.php"; 
    require "partials/header.php";
    require "partials/main.php"; ?>

    <?php if(!$notes)
        {
            echo "<h1>there is no notes yet !</h1>";
        } 
    ?>
    <div class="content">
        <?php foreach($notes as $note):?>
            <a href="../controllers/note.php?id=<?=$note['id']?>" class="note">
                <div class ="project_cards">
                    <p><?= htmlspecialchars($note['body'])?></p>
                </div>
            </a>
    <?php endforeach;?>
    </div>
    <p class="create">
        <a href="note-create.php">create new note</a>
    </p>
    
   <?php require "partials/footer.php"; ?> 