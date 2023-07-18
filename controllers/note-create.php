<?php
    session_start();
    require "../functions.php";
    require "../Database.php";
    require "../Response.php";
    require "../Validator.php";
    $config = require "../config.php";
    $db = new core\Database($config['database'],'root','abdelsalam30');
    
    $currentUserId = $_SESSION['id'];
    
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors=[];

    if(!(Validator::string($_POST['body'],1,1000)))
    {
        $errors['body'] = "A body of no more than 1,000 characters is required";
    }
    if(empty($errors))
    {
        $db->query("insert into notes (body,user_id) values(:body, :user_id)",['body'=>$_POST['body'],'user_id'=>$currentUserId]);
        header('location: notes.php');
        exit;
    }
}

require "../views/note-create.view.php";