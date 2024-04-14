<?php
    require_once "../model/$controller.model.php";

if($uri_ == "ref"){
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
        $referentiels = findAllReferentielSearch($_POST['search_matricule'], $referentiels);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $referentiels = findAllReferentielSearch($_POST['search_matricule'], $referentiels);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        $referentiels = findAllReferentielSearch($_SESSION['search_matricule'], $referentiels);
    }

}

?>