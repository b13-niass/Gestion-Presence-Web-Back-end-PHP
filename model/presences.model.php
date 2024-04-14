<?php
        // require_once dirname(__DIR__)."/orm/file.csv.php";

    function findAllPresence($promotion){
        $pre_array_keys = [
            'matricule',
            'nom',
            'prenom',
            'tel',
            'referentiel',
            'heure_arrivee',
            'etat',
            'date',
            'promo'
        ];
        $presences = read_data_files('presences',  $pre_array_keys);

        $presences = array_filter($presences, function($pro) use($promotion){
            return (int) $pro['promo'] == (int)$promotion;
        });

        $presences = array_values($presences);
       
        return $presences;
    }

    function getReferentielName($numero){
        $numero = (integer) $numero;
        if($numero === 1){
        return "Dev Web/mobile";
        }
        else if($numero === 2){
        return "Referentiel Digital";
        }
        else if($numero === 3){
        return "Developpement Data";
        }
        else if($numero === 4){
        return "Aws";
        } 
        else if($numero === 5){
        return "Hackeuse";
        }
    }

    function findAllPresenceFilter( $promotion, $filtre = null){
        $presenceFilter = findAllPresence($promotion);
        // dd($filtre);
        if($filtre != null){
            
            if(isset($filtre['status'])){
                $presenceFilter = array_filter($presenceFilter, function($value) use($filtre){
                    return (integer) $value['etat'] === (integer) $filtre['status']; 
                });
                $presenceFilter = array_values($presenceFilter);
            }

            if(isset($filtre['referentiels'])){
                $presenceFilter = array_filter($presenceFilter, function($value) use($filtre){
                    return (integer) $value['referentiel'] === (integer) $filtre['referentiels']; 
                });
                $presenceFilter = array_values($presenceFilter);   
                
  
           }
           
            if(isset($filtre['date'])){
                 $formattedDate = date('d-m-Y', strtotime($filtre['date']));

                $presenceFilter = array_filter($presenceFilter, function($value) use($formattedDate){
                    $formattedDate2 = date('d-m-Y', strtotime($value['date']));
                    return $formattedDate === $formattedDate2; 
                });
                $presenceFilter = array_values($presenceFilter);
                // dd($presenceFilter);

            }

        }
        
        $presenceFilter = array_values($presenceFilter);

        //  dd($presenceFilter);

        return $presenceFilter;
        
    }

    function findAllPresenceSearch( $presences, $search = null){
        $presenceFilter = [];
        // dd($search === '09-04-2024');
        if($search != null){
                $presenceFilter = array_filter($presences, function($value) use($search){
                    return $value['matricule'] === $search || $value['nom'] === $search 
                    || $value['prenom'] === $search || $value['tel'] === $search 
                    || getReferentielName($value['referentiel']) === $search 
                    || $value['date'] === $search  ; 
                });
                $presenceFilter = array_values($presenceFilter);
    
        }
        // dd($presenceFilter);
        $presenceFilter = array_values($presenceFilter);
        return $presenceFilter;
        
    }
    
?>