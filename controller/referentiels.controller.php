<?php
    require_once "../model/$controller.model.php";

   


if($uri_ == "ref"){
    $error_add_referentiels = [
        'libelle' => 'none',
        'desc' => 'none',
        'image' => 'none',
        'exist_ref' => 'none'
    ];
    unset($_SESSION['search_matricule']);
    $_SESSION['search_matricule'] = null;
    $promotion_active = $_SESSION['promotion_active'];
    
    if(!isset($_SESSION['per_page_app'])){
        $_SESSION['per_page_app'] = 10;
    }

    if(isset($_POST['per_page_app'])){
        $_SESSION['per_page_app'] = $_POST['per_page_app'];
    }

    $per_page = (integer) $_SESSION['per_page_app'];
    

    $referentiels = findAllReferentiel($_SESSION['promotion_active']);
    $nbrPage = getNbrPage( $referentiels, $per_page);
    if($nbrPage == 0){
        $nbrPage = 1;
    }
    $current_page = getCurrentPage($nbrPage);


    if(!isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && empty($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $referentiels = findAllReferentielSearch($referentiels, $_POST['search_matricule']);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $referentiels = findAllReferentielSearch( $referentiels, $_POST['search_matricule']);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        $referentiels = findAllReferentielSearch( $referentiels, $_SESSION['search_matricule']);
    }

    if(isset($_POST['add_new_referentiel'])){
        extract($_POST);
        $allowed_ext = array("jpg" => "image/jpg", 
        "jpeg" => "image/jpeg", 
        "png" => "image/png"); 

        if(isset($libelle) && !empty($libelle)){
            $libelle = strtolower(trim($libelle));
            if(isset($desc) && !empty($desc)){
                $desc = strtolower(trim($desc));
                
                if(isset($_FILES["image_referentiel"]) && !empty($_FILES["image_referentiel"]["name"])){                    $file_type = $_FILES["image_referentiel"]["type"]; 
                    if(in_array($file_type, $allowed_ext)){
                        if(isset($promo_to_ref) && (int)$promo_to_ref == (int)$_SESSION['promotion_active']){
                            $result_add_ref_base = addReferentialBaseEncodeFile($libelle, $desc, $_FILES);
                            $result_add_ref = addReferentielNew($libelle, $promo_to_ref, $_FILES);
                            if($result_add_ref_base == false || $result_add_ref == false){
                                $error_add_referentiels['exist_ref'] = 'block';
                            }
                        }else{
                            $result_add_ref_base = addReferentialBaseEncodeFile($libelle, $desc, $_FILES);
                            if($result_add_ref_base == false){
                                $error_add_referentiels['exist_ref'] = 'block';
                            }
                        }
                    }else{
                        $error_add_referentiels['image'] = 'block';
                    }
                   
                }else{
                    $files_ = [
                        'image_referentiel' => [
                         'tmp_name' => 'img/ref.jpg'
                        ]
                    ];
                    if(isset($promo_to_ref) && (int)$promo_to_ref == (int)$_SESSION['promotion_active']){
                        
                        $result_add_ref_base = addReferentialBaseEncodeFile($libelle, $desc, $files_);
                        $result_add_ref = addReferentielNew($libelle, $promo_to_ref, $files_);
                        if($result_add_ref_base == false || $result_add_ref == false){
                            $error_add_referentiels['exist_ref'] = 'block';
                        }
                    }else{
                        $result_add_ref_base = addReferentialBaseEncodeFile($libelle, $desc, $files_); 
                        if($result_add_ref_base == false){
                            $error_add_referentiels['exist_ref'] = 'block';
                        }
                    }
                }

            }else{
                $error_add_referentiels['desc'] = 'block';
            }
        }else{
            if(!isset($desc) || empty($desc)){
                $error_add_referentiels['desc'] = 'block';
            }
            $error_add_referentiels['libelle'] = 'block';
        }


    }
}

function generateRandomName($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

?>