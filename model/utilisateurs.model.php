<?php 

require_once dirname(__DIR__)."/orm/file.json.php";

function findAllUserFile(){
    $user_array_keys = [
        'email',
        'nom',
        'prenom',
        'password',
        'role',
        'promo',
        'image'
    ];
    $users = read_json_files('utilisateurs');
   
    return $users;
}

function addUsers($users){
   return write_json_files('utilisateurs', $users);
}

function findUser(array $users, array $data){
    $user = array_filter($users, function($user) use($data){
        
        if($user['email'] == $data['email'] && password_verify($data['password'], $user['password'])){
            return true;
        }
    });
    return array_values($user);
}
