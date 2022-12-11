<?php
    session_start();
    require_once "../models/userModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = ['username'=>$username, 'password'=>$password];

    $status = login($user);

    if($username == "" || $password == ""){
        header('location: ../views/login.php?err=null&&msg=abc');
    }else if($status){
        $_SESSION['valid'] = 'true';
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: ../views/home.php');
    }else{
        echo "invalid user";
    }

?>