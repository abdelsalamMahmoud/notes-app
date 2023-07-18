<?php

require "../Validator.php";
require "../Database.php";
require "../functions.php";
$config = require "../config.php";
$db = new core\Database($config['database'],'root','abdelsalam30');

if($_SERVER['REQUEST_METHOD']=='POST')
{

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//validate the form inputs
    $errors=[];

    if(!Validator::string($name,2,255))
    {
        $errors['name'] = "please provide a name of at least 2 characters";
    }

    if(!Validator::email($email))
    {
        $errors['email'] = "please provide a valid email address";
    }

    if(!Validator::string($password,7,255))
    {
        $errors['password'] = "please provide a password of at least 7 characters";
    }
    

    if(empty($errors))
    {
        //check if the accout already exist
        $user = $db->query("select * from users where email = :email",['email'=> $email])->find();
            // if yes ,redirect to login page
             if($user)
             {
                header('location: ../index.php');
                exit();
             }else{
                // if no ,create it
                $db->query("insert into users (email, password,name) values(:email , :password , :name)",['email'=>$email , 'password'=> $password , 'name'=> $name]);
                $id = $db->query("select * from users where email = :email",['email'=> $email])->find();
                session_start();
                $_SESSION['user'] = $name;
                $_SESSION['id'] = $id['id'];
                header('location: index.php');
                exit();
             }
    }
}


require "../views/registration-create.view.php";