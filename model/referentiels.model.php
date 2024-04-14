<?php
    function findAllReferentiel($promotion){
        $ref_array_keys = [
            'id',
            'libelle',
            'promo',
            'image',
            'status'
        ];

        $referentiels = read_data_files('referentiels',  $ref_array_keys);
        $referentiels =  array_filter($referentiels, 
        fn($ref)=> (integer) $ref['promo'] === $promotion);

        $referentiels = array_values($referentiels);
        
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