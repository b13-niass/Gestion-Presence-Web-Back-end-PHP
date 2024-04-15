<?php 
require_once "../model/login.model.php";

$promotion_active = $_SESSION['promotion_active'];
$users = findAllUser($promotion_active);
// 

if(isset($_POST['login'])){
    if(isset($_POST['email']) && !empty($_POST['email']) && 
    isset($_POST['password']) && !empty($_POST['password'])){
        extract($_POST);
        $user = findUser($users, ['email' => $email,'password'=> $password]);

        if(count($user) > 0){
            $_SESSION['user_login'] = $user[0];
            header("Location: /pro");
        }else{
            header("Location: /login");
        }
    }
}

if(isset($_POST['logout'])){
    $_SESSION['user_login'] = null;
    // session_destroy();
    header("Location: /login");
}