<?php
    require_once "../model/$controller.model.php";

if($uri_ == "app"){

    unset($_SESSION['filtre_apprenant']);
    unset($_SESSION['search_matricule']);
    $_SESSION['filtre_apprenant'] = null;
    $_SESSION['search_matricule'] = null;
    
    $promotion_active = $_SESSION['promotion_active'];
    if(!isset($_SESSION['per_page_app'])){
        $_SESSION['per_page_app'] = 10;
    }

    if(isset($_POST['per_page_app'])){
        $_SESSION['per_page_app'] = $_POST['per_page_app'];
    }

    $per_page = (integer) $_SESSION['per_page_app'];
    

    $apprenants = findAllApprenant($_SESSION['promotion_active']);
    $nbrPage = getNbrPage( $apprenants, $per_page);
    if($nbrPage == 0){
        $nbrPage = 1;
    }
    $current_page = getCurrentPage($nbrPage);


    if(!isset($_SESSION['filtre_apprenant']) && !isset($_POST['filtre_apprenant'])){
        unset($_SESSION['filtre_apprenant']);
    }

    if(!isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && empty($_POST['filtre_apprenant'])){
        unset($_SESSION['filtre_apprenant']);
    }
    
    if(!isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && !empty($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_POST['filtre_apprenant']);
        $_SESSION['filtre_apprenant'] = $_POST['filtre_apprenant'];
    }
    
    if(isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && !empty($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_POST['filtre_apprenant']);
        $_SESSION['filtre_apprenant'] = $_POST['filtre_apprenant'];
    }
    
    if(isset($_SESSION['filtre_apprenant']) && !isset($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_POST['filtre_apprenant']);
    }
    

    if(!isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && empty($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_POST['search_matricule']);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_POST['search_matricule']);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($apprenants, $_SESSION['search_matricule']);
    }

    // dd($apprenants);


    if(count($apprenants) == 0){
        $apprenantsPaginate = [];
    }else{
        $apprenantsPaginate = listPaginate($per_page, $apprenants,$current_page);
    }

    if (isset($_POST['details_promo']) && isset($_POST['idPromotion'])){
        if(!empty($_POST['idPromotion'])){
            $_SESSION['idPromotion'] = (integer) $_POST['idPromotion'];
        }
    }
}
?>