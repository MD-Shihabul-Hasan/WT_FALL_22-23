<?php 
    require_once('db.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('{$user['id']}', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function deleteUser($user){
        $con = getConnection();
        
    }

    function editUser($id){
        $con = getConnection();
        
    }

    function searchUserById($id){
        $con = getConnection();
        
    }

    function allUser($id){
        $con = getConnection();
        
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>