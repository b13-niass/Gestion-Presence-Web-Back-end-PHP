<?php 

function findAllUser($promotion){
    $user_array_keys = [
        'email',
        'nom',
        'prenom',
        'password',
        'role',
        'promo',
    ];
    $users = read_data_files('utilisateurs',  $user_array_keys);
    // dd($promotion);
    $users = array_filter($users, function($pro) use($promotion){
        return (int) $pro['promo'] == (int)$promotion;
    });
    
    $users = array_values($users);
   
    return $users;
}


function findUser(array $users, array $data){
    $user = array_filter($users, function($user) use($data){
        if($user['email'] == $data['email'] && $user['password'] == $data['password']){
            return true;
        }
    });
    return array_values($user);
}
