<?php 

require_once dirname(__DIR__)."/orm/file.json.php";

function findAllUser($promotion){
    $user_array_keys = [
        'email',
        'nom',
        'prenom',
        'password',
        'role',
        'promo',
        'image'
    ];
    // $users = read_data_files('utilisateurs',  $user_array_keys);
    $users = read_json_files('utilisateurs');
    // dd($promotion);
    $users = array_filter($users, function($pro) use($promotion){
        return (int) $pro['promo'] == (int)$promotion;
    });
    
    $users = array_values($users);
   
    return $users;
}


function findUser(array $users, array $data){
    $user = array_filter($users, function($user) use($data){
        
        if($user['email'] == $data['email'] && password_verify($data['password'], $user['password'])){
            return true;
        }
    });
    return array_values($user);
}
