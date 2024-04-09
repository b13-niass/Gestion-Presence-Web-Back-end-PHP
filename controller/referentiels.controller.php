<?php
    session_start();
    unset($_SESSION['search_matricule']);
    $_SESSION['search_matricule'] = null;
    
    $referentiels = findAllReferentiel();

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

?>