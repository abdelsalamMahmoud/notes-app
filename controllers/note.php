<?php
    session_start();
    require "../functions.php";
    require "../Database.php";
    require "../Response.php";
    $config = require "../config.php";

    $message = "note";
    $db = new core\Database($config['database'],'root','abdelsalam30');
    $currentUserId = $_SESSION['id'];
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $query = "select * from notes where id = ?";
        $note =  $db->query($query,[$id])->findOrFail();//fetchAll to return all records
        authorize($note['user_id'] != $currentUserId);
        $db->query("delete from notes where id = ?",[$id]);
        header('location: notes.php');
        exit;
    }else{
        
        $query = "select * from notes where id = ?";
        $note =  $db->query($query,[$id])->findOrFail();//fetchAll to return all records
        authorize($note['user_id'] != $currentUserId);
    }
    require "../views/note.view.php";