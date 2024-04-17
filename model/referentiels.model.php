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

    function findAllReferentielWithoutPromo(){
        $ref_array_keys = [
            'id',
            'libelle',
            'promo',
            'image',
            'status'
        ];

        $referentiels = read_data_files('referentiels',  $ref_array_keys);
        return $referentiels;
    }

    function findAllReferentielBase(){
        $ref_array_keys = [
            'id',
            'libelle',
            'image',
            'desc'
        ];

        $referentiels = read_data_files('referentiels_base',  $ref_array_keys);        
        return $referentiels;
    }


    function findAllReferentielSearch($referentiels, $search = null){
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

    function writeReferentiels(array $data){
       return write_data_files('referentiels_base', $data);
    }

    function writeReferentielsPromo(array $data){
        return write_data_files('referentiels', $data);
     }


    function addReferentialBase($libelle, $desc){
        $referentiels = findAllReferentielBase();
        $id = end($referentiels)['id']+1;
        $ref = ['id' => $id, 'libelle' => $libelle, 'image' => 'ref.jpg', 'desc'=> $desc];
        foreach($referentiels as $referentiel){
            if($ref['libelle'] == $referentiel['libelle']){
                return false;
            }
        }
        
        array_push($referentiels, $ref);
        
        return writeReferentiels($referentiels);

    }

    function getLibelleReferentiel($id){
        $referentiels = findAllReferentielBase();

        foreach($referentiels as $ref){
            if((integer) $ref['id'] == $id){
                return $ref['libelle'];
            }
        }
    }

    function addReferentiel($id,$promo){
            $referentiels = findAllReferentielWithoutPromo();
            $libelle = getLibelleReferentiel($id);
            $ref = ['id' => $id, 'libelle' => $libelle,'promo' => $promo, 'image' => 'ref.jpg', 'status' => 1];
            $cpt = 0;
            foreach($referentiels as $referentiel){
                if($ref['id'] == (int)$referentiel['id'] && (int)$referentiel['promo'] == $promo){
                    $cpt = 1;
                    break;
                }
            }
            
            if($cpt == 0){
                array_push($referentiels, $ref);
            
                return writeReferentielsPromo($referentiels);
            }else{
                return false;
            }
           

    }

?>