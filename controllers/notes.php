<?php
session_start();
require "../functions.php";
require "../Database.php";
$config = require "../config.php";
$message = "my notes";
$db = new core\Database($config['database'],'root','abdelsalam30');
$currentUserId = $_SESSION['id'];
$notes =  $db->query("select * from notes where user_id = :user_id",['user_id'=>$currentUserId])->get();//fetchAll to return all records
require "../views/notes.view.php";