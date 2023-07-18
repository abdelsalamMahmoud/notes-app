<?php
    session_start();
     require "functions.php";
     require "Database.php";
     require "Response.php";
     $config = require "config.php";
     $db = new core\Database($config['database'],'root','abdelsalam30');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $result = $db->query("select * from users where email = :email and password = :password limit 1",['email'=>$email,'password'=>$pass])->find();

    if($result)
    {
        $_SESSION['id'] = $result['id'];
        $_SESSION['user'] = $result['name'];
        header("Location: controllers/index.php");
        exit;
    }else {
        echo "Invalid email or password";
    }
}

require "views/login.view.php";