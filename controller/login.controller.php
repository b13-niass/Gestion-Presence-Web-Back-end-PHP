<?php 
require_once "../model/login.model.php";

if(isset($_SESSION['promotion_active'])){
    $promotion_active = $_SESSION['promotion_active'];
    $users = findAllUser($promotion_active);
}


// dd(password_hash("passer@1", PASSWORD_DEFAULT));
// 

$error_login = [
    'email_required' => 'none',
    'pwd_required' => 'none',
    'email_invalid' => 'none',
    'email_pwd_error' => 'none'
];

if(isset($_POST['login'])){
    if(isset($_POST['email']) && !empty($_POST['email'])){ 
        extract($_POST);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email){
            if(isset($_POST['password']) && !empty($_POST['password'])){
            
                $user = findUser($users, ['email' => $email,'password'=> $password]);
                // dd($user);
                if(count($user) > 0){
                    $_SESSION['user_login'] = $user[0];
                    if($user[0]['role'] == 1){
                        header("Location: /pro", true, 301);
                    }else{
                        header("Location: /pre", true, 301);
                    }
                }else{
                    // header("Location: /login", true, 301);
                    $error_login['email_pwd_error'] = 'flex';
                }
            }
        }else{
            $error_login['email_invalid'] = 'block';
        }

    }else{
        if(!isset($_POST['password'])|| empty($_POST['password'])){
            $error_login['pwd_required'] = 'block';
        }
        $error_login['email_required'] = 'block';
    }
}

if(isset($_POST['logout'])){
    // $_SESSION['user_login'] = null;
    // $_SESSION['promotion_active'] = null;
    // $_SESSION['per_page_pro'] = null;
    // $_SESSION['per_page_pre'] = null;
    // $_SESSION['all_presence'] = null;
    // $_SESSION['filter_presence'] = null;
    // $_SESSION['search_matricule'] = null;
    // session_destroy();
    session_unset(); 
    session_destroy();  
    header("Location: /login",true, 301);
}