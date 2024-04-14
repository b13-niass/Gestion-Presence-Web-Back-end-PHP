<?php

    function findAllPromotion(){
        $pro_array_keys = [
            'libelle',
            'dateDebut',
            'dateFin',
            'number'
        ];
        $promotions = read_data_files('promos',  $pro_array_keys);
        $promotions =  array_map(function($promo){
            $promo["number"] = (integer) $promo["number"];
            return $promo;
            }, $promotions);

        // dd($promotions);
        return $promotions;
    }
?>