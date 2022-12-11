<?php
    session_start();
    require_once('../models/userModel.php');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        header('location: ../views/registration.php?err=null');

    }else { 
        $user = ['id'=>$id, 'username'=>$username, 'password'=> $password, 'email'=> $email];
        $status = insertUser($user);
        if($status){
            header('location: ../views/login.php');
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
        }else{
            echo "DB insert error!";
        }
        
    }


?>