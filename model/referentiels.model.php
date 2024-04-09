<?php

    // require_once "../model/utils.php";
    function findAllReferentiel(){
        $referentiels = [
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Dev Web/mobile',
                'status' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Referentiel Digital',
                'status' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Aws',
                'status' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Hackeuse',
                'status' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Developpement Data',
                'status' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Teste',
                'status' => 1
            ],
        ];

        return $referentiels;
    }


    function findAllReferentielSearch($search = null, $referentiels){
        $referentielsFilter = [];
        // dd($search);
        if($search != null){
                $referentielsFilter = array_filter($referentiels, function($value) use($search){
                    return $value['libelle'] === $search ||  ($search == 'Active' ? 1 : 0) === $value['status']; 
                });
                
                $referentielsFilter = array_values($referentielsFilter);
    
        }
        $referentielsFilter = array_values($referentielsFilter);
        return $referentielsFilter;
        
    }
?>