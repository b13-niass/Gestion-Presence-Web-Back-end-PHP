<?php

    function findAllPromotion(){
        $promotions = [
            ['libelle' => 'promotion 1', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2015', 'status' => 0],
            ['libelle' => 'promotion 2', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2016', 'status' => 0],
            ['libelle' => 'promotion 3', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2017', 'status' => 0],
            ['libelle' => 'promotion 4', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2018', 'status' => 0],
            ['libelle' => 'promotion 5', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2019', 'status' => 0],
            ['libelle' => 'promotion 6', 'dateDebut' => '10-10-2015', 'dateFin' => '10-10-2019', 'status' => 1]
        ];
        
        return $promotions;
    }
?>