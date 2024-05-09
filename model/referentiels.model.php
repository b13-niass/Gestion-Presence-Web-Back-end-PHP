<?php
 require_once "../model/promos.model.php";

function encodeImageToBase64($imagePath) {
    // Read the binary image file
    $imageData = file_get_contents($imagePath);

    // Encode the binary data to base64
    $base64Image = base64_encode($imageData);

    return $base64Image;
}


function writeBase64ImageToCSV($base64Image, $csvFilePath, $idRef) {
    // Write the base64-encoded image to a CSV file
    $file = fopen($csvFilePath, 'a');
    $result = fputcsv($file, array($idRef,$base64Image));
    fclose($file);
    return $result;
}

function uploadFileEncode($files,$idRef){
dd($files);
    $imagePath = $files["image_referentiel"]["tmp_name"];
    $csvFilePath = '../data/image_referentiels.csv';
    
    $base64Image = encodeImageToBase64($imagePath);
    return writeBase64ImageToCSV($base64Image, $csvFilePath, $idRef);
}



    function findAllReferentiel($promotion){
        $ref_array_keys = [
            'id',
            'libelle',
            'promo',
            // 'image',
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
            // 'image',
            'status'
        ];

        $referentiels = read_data_files('referentiels',  $ref_array_keys);
        return $referentiels;
    }

    function findAllReferentielBase(){
        $ref_array_keys = [
            'id',
            'libelle',
            // 'image',
            'desc'
        ];

        $referentiels = read_data_files('referentiels_base',  $ref_array_keys);        
        return $referentiels;
    }

    function findAllReferentielImageCode(){
        $ref_array_keys = [
            'id',
            'code'
        ];

        $images = read_data_files('image_referentiels',  $ref_array_keys);
        return $images;
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


    function addReferentialBase($libelle, $image,$desc){
        $referentiels = findAllReferentielBase();
        $id = end($referentiels)['id']+1;
        $ref = ['id' => $id, 'libelle' => $libelle, 'image' => $image, 'desc'=> $desc];
        foreach($referentiels as $referentiel){
            if($ref['libelle'] == $referentiel['libelle']){
                return false;
            }
        }
        
        array_push($referentiels, $ref);
        
        return writeReferentiels($referentiels);

    }

    function addReferentialBaseEncodeFile($libelle, $desc, $files){
        $referentiels = findAllReferentielBase();
        $id = end($referentiels)['id']+1;

        $ref = ['id' => $id, 'libelle' => $libelle, 'desc'=> $desc];
        foreach($referentiels as $referentiel){
            if($ref['libelle'] == $referentiel['libelle']){
                return false;
            }
        }
        $result_upload = uploadFileEncode($files,$id);
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

    function getRefImageCode($id){
        $images = findAllReferentielImageCode();
        foreach($images as $img){
            if((int)$img["id"] == (int) $id){
                return $img["code"];
            }
        }
    }

    function getIdReferentiel($libelle){
        $referentiels = findAllReferentielBase();

        foreach($referentiels as $ref){
            if($ref['libelle'] == $libelle){
                return $ref['id'];
            }
        }
        return "css/ref.jpg";
    }

    function findAllRefPromoWithoutApp($promo){
        $referentiels = findAllReferentiel($promo);
        $ref_promo_without_app = [];
        foreach($referentiels as $ref){
            $test = if_ref_exist_apprenant($promo, $ref);
            if(!$test){
                $ref_promo_without_app[] = $ref;
            }
        }
        return $ref_promo_without_app;
    }

    function addReferentiel($referentiels_check,$promo){
            $referentiels = findAllReferentielWithoutPromo();
            $ref_promo_without_app = findAllRefPromoWithoutApp($promo);
            $un_checked = [];
            $referentiels_update = [];
            foreach($ref_promo_without_app as $rpwa){
                if(!in_array($rpwa['id'], $referentiels_check)){
                    $un_checked[] = $rpwa['id'];
                }
            }
            
            if(count($un_checked)){
                foreach($referentiels as $ref){
                    if(in_array($ref['id'], $un_checked) && $ref['promo'] == $promo){
                        continue;
                    }
                    $referentiels_update[] = $ref;
                }
                $referentiels = $referentiels_update;
            } 
        
            foreach($referentiels_check as $ref_c){
                    $cpt = 0;
                    $libelle = getLibelleReferentiel($ref_c);
                    $ref_ = ['id' => $ref_c, 'libelle' => $libelle,'promo' => $promo,'status' => 1];  
                    foreach($referentiels as $ref){
                        if($ref_c == $ref['id'] && $promo == $ref['promo']){
                            $cpt = 1;
                        }
                    }
                    if($cpt == 0){
                        array_push($referentiels, $ref_);
                    }       
            }
                return writeReferentielsPromo($referentiels);
           
    }

    function addReferentielNew($libelle, $promo, $files){
        $referentiels = findAllReferentiel((int)$promo);
        $referentielsAll = findAllReferentielBase();
        $idRef = getIdReferentiel($libelle);

        $cpt = 0;
        $ref_to_add = [
            'id' => $idRef,
            'libelle' => $libelle,
            'promo' => $promo,
            'status' => 1
        ];

        foreach($referentiels as $referentiel){
            if($libelle == $referentiel['libelle']){
               return false;
            }
        }

        // $result_upload = uploadFileEncode($files,$idRef);
        array_push($referentiels, $ref_to_add);
    
        return writeReferentielsPromo($referentiels);

}

?>