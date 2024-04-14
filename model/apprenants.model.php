<?php

    // require_once dirname(__DIR__)."/orm/file.csv.php";

    function findAllApprenant($promotion){
        $app_array_keys = [
            'image',
            'nom',
            'prenom',
            'email',
            'genre',
            'telephone',
            'promo',
        ];
        $apprenants = read_data_files('apprenants',  $app_array_keys);

        $apprenants = array_filter($apprenants, function($app) use($promotion){
            return (int) $app['promo'] == (int)$promotion;
        });

        $apprenants = array_values($apprenants);

        return $apprenants;
    }
    

    function findAllApprenantFiltre($apprenants, $search = null){
        $apprenantsFilter = [];
        // dd($search);
        if($search != null){
                $apprenantsFilter = array_filter($apprenants, function($value) use($search){
                    return $value['nom'] === $search || $value['prenom'] === $search 
                    || $value['email'] === $search || $value['telephone'] === $search; 
                });
                
                $apprenantsFilter = array_values($apprenantsFilter);
    
        }
        $apprenantsFilter = array_values($apprenantsFilter);
        return $apprenantsFilter;
        
    }

?>