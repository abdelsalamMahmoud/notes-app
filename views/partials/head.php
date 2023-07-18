<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
        display: grid;
        align-items: center;
        text-align: center;
        text-transform:capitalize;
        font-family: montserrat;
        background-image: linear-gradient(260deg, #ca5757, #03a9F4);
        color: white;
        }

        ul li {
            list-style: none;
        }
        .note{
            text-decoration: none;
            font-size:20px;
            font-weight: bold;
        }
        ul li a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin: 10px;
        }
        header {
            margin: -20px -15px 0  ;
            margin-top: -20px;
            background-color: #2c3e50ab;
            width: 101.7%;
            height: 71.5px;
        }
        nav {
            overflow: hidden;
            margin-top: 3px;
            padding-top: 10px;
            margin-left: 400px;
        }
        nav .normal {
            float: left;
            width: 100px;
            display: block;
            text-align: center;
            padding: 18px 20px;
            text-decoration: none;
            font-size: 20px;
            font-weight: 400;
            color: #fff;
            font-family: 'Akshar', sans-serif;
        }
        nav a:hover {
            background: #ddd;
            color: rgb(0, 0, 0);
        }

        #logo {
            float: left;
            padding: 9px 0 9px 0;
        }
        #logo p {
            width: 200px;
            height: 145px;
            margin-top: 20px;
            margin-left: 10px;
            font-size: 25px;

        }
        #logo p span{
            color:yellow;
        }
        .active{
            float: left;
            width: 100px;
            display: block;
            text-align: center;
            padding: 18px 20px;
            text-decoration: none;
            font-size: 20px;
            font-weight: 400;
            color: yellow;
            font-family: 'Akshar', sans-serif;
        }
        .content {
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .project_cards {
            background-color: linear-gradient(260deg, #ca5757, #03a9F4);
            color:white;
            border: 1px solid white;
            height: 125px;
            width: 200px;
            padding :10px;
            overflow: hidden;
            border-radius: 10px;
            margin: 20px;
            transition: 0.7s ease;
        }
        .project_cards:hover {
            transform: scale(1.1);
        }
        ul{
            margin-left:-40px;
        }
        .create {
            width: 150px;
            height: 50px;
            background-color: yellow;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
            border-radius: 15px;
            position: absolute;
            right: 30px;
            bottom: 40px;
            transition: .5s ease;
        }
        .create:hover {
        transform: scale(1.1);
        }
        .create a{
            text-decoration: none;
            color: black;
            font-weight: 700;
            padding-left:3px;
        }
        .create a:hover{
        text-decoration: underline;
        }
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-track {
            background-color:#000016;
        }
        ::-webkit-scrollbar-thumb {
            background-color: yellow;
        }
        .options {
            display: flex;
            gap: 5px;
            margin-right:44.5%;
            margin-top:30px;
            flex-direction: row-reverse;
        }
        h1 span{
            color :yellow;
        }
        .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        background: white;
        border-radius: 10px;
        }
        .center h1 {
        text-align: center;
        padding: 0 0 20px 0;
        color: black;
        border-bottom: 1px solid silver;
        }
        .center form {
        padding: 0 40px;
        box-sizing: border-box;
        color:black;
        }
            form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }

    .txt_field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }

    .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s ease;
    }

    .txt_field span::before {
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: .5s ease;
    }

    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label {
        top: -5px;
        color: #2691d9;
    }

    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ span::before{
        width: 100%;
    }

    .submit{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
    }

    .submit:hover{
        border-color: #2691d9;
        transition: .5s ease;
    }
    .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
    }

    .signup_link a {
        color: #2691d9;
        text-decoration: none;
    }
    .signup_link a:hover{
        text-decoration: underline;
    }
    .deletebtn {
        background: red;
        margin-right: 10px;
        outline: none;
        width: 55px;
        height: 30px;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .editbtn{
        background: gray;
        margin-right: 10px;
        outline: none;
        width: 45px;
        height: 30px;
        color: white;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        display: flex;
        align-items: center;
        text-align: center;
        padding-left: 10px;
    }
    .cancelbtn{
        background: gray;
        margin-right: 10px;
        outline: none;
        width: 65px;
        height: 30px;
        color: white;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        display: flex;
        align-items: center;
        text-align: center;
        padding-left: 10px
    }
    .updatebtn{
        background: blue;
        margin-right: 10px;
        outline: none;
        width: 70px;
        height: 31px;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .optionss{
        display: flex;
        gap: 5px;
        margin-left:44%;
        margin-top:30px;
    }
    .createbtn{
        background: blue;
        outline: none;
        width: 75px;
        height: 31px;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer; 
    }
    textarea{
        border-radius: 6px;
        margin-top:20px;
    }
    .logoutbtn{
        position: absolute;
        background: yellow;
        outline: none;
        width: 65px;
        height: 30px;
        color: black;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        display: flex;
        align-items: center;
        text-align: center;
        padding-left: 10px;
        right: 25px;
        top: 13px;
    }

    </style>
</head>
<body>