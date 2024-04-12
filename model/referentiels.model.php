<?php

    function findAllReferentiel($promotion){
        $referentiels = [
        [
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Dev Web/mobile',
                'status' => 1,
                'id' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Referentiel Digital',
                'status' => 1,
                'id' => 2
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Aws',
                'status' => 1,
                'id' => 4
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Hackeuse',
                'status' => 0,
                'id' => 5
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Developpement Data',
                'status' => 1,
                'id' => 3
            ],
            'idPromotion' => 6
        ],
        [
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Dev Web/mobile',
                'status' => 1,
                'id' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Referentiel Digital',
                'status' => 1,
                'id' => 2
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Aws',
                'status' => 0,
                'id' => 4
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Developpement Data',
                'status' => 1,
                'id' => 3
            ],
            'idPromotion' => 5
        ],
        [
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Dev Web/mobile',
                'status' => 1,
                'id' => 1
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Referentiel Digital',
                'status' => 1,
                'id' => 2
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Hackeuse',
                'status' => 1,
                'id' => 5
            ],
            [
                'image' => './img/ref.jpg',
                'libelle' => 'Developpement Data',
                'status' => 1,
                'id' => 3
            ],
            'idPromotion' => 4
        ]
    ];

    foreach($referentiels as $referentiel_list){
        if($referentiel_list['idPromotion'] == $promotion){
           return array_slice($referentiel_list, 0, -1);
        }
    }
    return [];
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