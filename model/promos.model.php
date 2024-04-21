<?php
 require_once "../model/referentiels.model.php";
 require_once "../model/apprenants.model.php";
    function findAllPromotion(){
        $pro_array_keys = [
            'libelle',
            'dateDebut',
            'dateFin',
            'number',
            'statut'
        ];
        $promotions = read_data_files('promos',  $pro_array_keys);
        $promotions =  array_map(function($promo){
            $promo["number"] = (integer) $promo["number"];
            return $promo;
            }, $promotions);

        // dd($promotions);
        return $promotions;
    }

    function addPromotion($libelle, $dateDebut, $dateFin, $number){
        $promotions = findAllPromotion();

        $promo = ['libelle' => $libelle, 'dateDebut' => $dateDebut, 'dateFin' => $dateFin, 'number' => $number,'status' => 0];
        foreach($promotions as $promo){
            if($promo['libelle'] == $promotions['libelle']){
                return false;
            }
        }
        array_push($promotions, $promo);
        
        return writePromotions($promotions);

}

    function getActivePromotion($promotions){
        foreach($promotions as $promotion){
            if((integer)$promotion["statut"] == 1){
                return $promotion;
            }
        }
    }

    function writePromotions(array $data){
        return write_data_files('promos', $data);
     }
 
     function checkedPromotions($idActive, $idToActive){
         $promotions = findAllPromotion();
      
         $promotions = array_map(function($promo) use($idActive, $idToActive){
            
            if($idActive != $idToActive){
                if((integer) $promo['number'] == $idActive){
                    $promo['statut'] = 0;
                }
                if((integer) $promo['number'] == $idToActive){
                    $promo['statut'] = 1;
                }
                return $promo;
            }else{
                if((integer) $promo['number'] == $idActive){
                    $promo['statut'] = 0;
                }
                return $promo;
            }
         }, $promotions);
         
        //  dd($promotions);
         return writePromotions($promotions);
 
     }

     function ifExistPromo($libelle){
        $promotions = findAllPromotion();
        $result = array_search($libelle, array_column($promotions, 'libelle'));
        if(is_bool($result)){
            return false;
        }else{
            return $promotions[$result];
        }
     }

     function getPromoRef($promo){
        return findAllReferentiel($promo);
     }

     function getDiffRefPromo($promo){
        $ref_base = findAllReferentielBase();
        $ref_promo = findAllReferentiel($promo);
        $result_ref_base = [];
        $result_ref_promo = [];
        $specifiedKeys = array('id', 'libelle');
        
        foreach($ref_base as $rb){
            $result_ref_base[] = array_intersect_key($rb, array_flip($specifiedKeys));
        }
        foreach($ref_promo as $rp){
            $result_ref_promo[] = array_intersect_key($rp, array_flip($specifiedKeys));
        }

        $result = array_diff_both($result_ref_base, $result_ref_promo);

        return $result;

     }


    function array_diff_both($array1, $array2) {
        $diff1 = array_map(function($item) {
            return serialize($item);
        }, $array1);
        $diff2 = array_map(function($item) {
            return serialize($item);
        }, $array2);
    
        $diff = array_merge(array_diff($diff1, $diff2), array_diff($diff2, $diff1));
    
        return array_map(function($item) {
            return unserialize($item);
        }, $diff);
    }

     function if_ref_exist_apprenant($promo, $ref){
        $apprenants = findAllApprenant($promo);
        foreach($apprenants as $app){
            if((integer) $app['referentiel'] == (integer) $ref['id']){
                return true;
            }
        }
        return false;
     }


?>