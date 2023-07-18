<?php
session_start();
require "../functions.php";
require "../Database.php";
require "../Response.php";
require "../Validator.php";
$config = require "../config.php";
$db = new core\Database($config['database'],'root','abdelsalam30');    
$currentUserId = $_SESSION['id'];
$id = $_POST['id'];

// find the correspanding note
$query = "select * from notes where id = ?";
$note =  $db->query($query,[$id])->findOrFail();//fetchAll to return all records

// aurhorize that the current user can edit the note
authorize($note['user_id'] != $currentUserId);

// validate the form
$errors=[];
  
    if(!(Validator::string($_POST['body'],1,1000)))
    {
        $errors['body'] = "A body of no more than 1,000 characters is required";
    }

// if there are no validatin errors , update the note

    if(!$errors)
    {
        $db->query("update notes set body = :body where id = :id",['id'=>$_POST['id'],'body'=>$_POST['body']]);
        // redirect the user
        header('location: notes.php');
        exit;
    }

require "../views/note-edit.view.php";



