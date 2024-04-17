<?php
    require_once "../model/$controller.model.php";

if($uri_ == "ref"){
    $error_add_referentiels = 1;
    unset($_SESSION['search_matricule']);
    $_SESSION['search_matricule'] = null;
    $promotion_active = $_SESSION['promotion_active'];
    
    $referentiels = findAllReferentiel($_SESSION['promotion_active']);

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

        uploadFile($_FILES);

        // if(!addReferentialBase($libelle, $desc)){
        //     $error_add_referentiels = 0;
        // }else{
        //     $error_add_referentiels = 1;
        // }
    }
}

function uploadFile($files){
    // dd($_SERVER);
    $target_dir = $_SERVER['DOCUMENT_ROOT'].'/projet/public/img/';
    $target_file = $target_dir.basename($files["image_referentiel"]["name"]);
    if(isset($files["image_referentiel"]) &&  
        $files["image_referentiel"]["error"] == 0) { 
        $allowed_ext = array("jpg" => "image/jpg", 
                            "jpeg" => "image/jpeg", 
                            "png" => "image/png"); 
        $file_name = $files["image_referentiel"]["name"]; 
        $file_type = $files["image_referentiel"]["type"]; 
        $file_size = $files["image_referentiel"]["size"]; 
      
        $ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
        if (!array_key_exists($ext, $allowed_ext)) { 
            die("Error: Please select a valid file format."); 
        }     
                      $maxsize = 2 * 1024 * 1024; 
          
        if ($file_size > $maxsize) { 
            die("Error: File size is larger than the allowed limit."); 
        }                     
        if (in_array($file_type, $allowed_ext)) 
        { 
            if (file_exists($target_dir . $files["image_referentiel"]["name"])) { 
                echo $files["image_referentiel"]["name"]." is already exists."; 
            }         
            else { 
                if (move_uploaded_file($files["image_referentiel"]["tmp_name"],  
                $target_file)) { 
                    echo "The file ".  $files["image_referentiel"]["name"].  
                      " has been uploaded."; 
                }  
                else { 
                    echo "Sorry, there was an error uploading your file."; 
                } 
            } 
        } 
        else { 
            echo "Error: Please try again."; 
        } 
    } 
    else { 
        echo "Error: ". $files["image_referentiel"]["error"]; 
    } 
    die();
} 


?>