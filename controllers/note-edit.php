<?php
    session_start();
    require "../functions.php";
    require "../Database.php";
    require "../Response.php";
    require "../Validator.php";
    $config = require "../config.php";
    $db = new core\Database($config['database'],'root','abdelsalam30');    
    $currentUserId = $_SESSION['id'];
    $id = $_GET['id'];

    $query = "select * from notes where id = ?";
    $note =  $db->query($query,[$id])->findOrFail();//fetchAll to return all records
    authorize($note['user_id'] != $currentUserId);
require "../views/note-edit.view.php";