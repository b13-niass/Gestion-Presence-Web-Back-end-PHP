<?php
    session_start();
    unset($_SESSION['filtre_apprenant']);
    unset($_SESSION['search_matricule']);
    $_SESSION['filtre_apprenant'] = null;
    $_SESSION['search_matricule'] = null;
    
    
    $current_page = 1;
    $apprenants = findAllApprenant();
    $nbrPage = ceil(count($apprenants)/ PER_PAGE);

    if(isset($_GET['page']) && !empty($_GET['page'])){
        $uri = explode('/', $_GET['page']);
        if(array_key_exists(2, $uri)){
            $current_page = (integer) $uri[2];
            if($current_page < 1){
                $current_page = 1;
            }
            if($current_page > $nbrPage){
                $current_page = $nbrPage;
            }
        }
        
    }

    if(!isset($_SESSION['filtre_apprenant']) && !isset($_POST['filtre_apprenant'])){
        unset($_SESSION['filtre_apprenant']);
    }

    if(!isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && empty($_POST['filtre_apprenant'])){
        unset($_SESSION['filtre_apprenant']);
    }
    
    if(!isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && !empty($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($_POST['filtre_apprenant'], $apprenants);
        $_SESSION['filtre_apprenant'] = $_POST['filtre_apprenant'];
    }
    
    if(isset($_SESSION['filtre_apprenant']) && isset($_POST['filtre_apprenant']) && !empty($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($_POST['filtre_apprenant'], $apprenants);
        $_SESSION['filtre_apprenant'] = $_POST['filtre_apprenant'];
    }
    
    if(isset($_SESSION['filtre_apprenant']) && !isset($_POST['filtre_apprenant'])){
        $apprenants = findAllApprenantFiltre($_SESSION['filtre_apprenant'], $apprenants);
    }
    

    if(!isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && empty($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($_POST['search_matricule'], $apprenants);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($_POST['search_matricule'], $apprenants);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        $apprenants = findAllApprenantFiltre($_SESSION['search_matricule'], $apprenants);
    }

    // dd($apprenants);


    
    $apprenantsPaginate = listPaginate(PER_PAGE, $current_page, $apprenants);
    
    $first = "/app/1";
    $previous = $current_page <= 1 ? "/app/1" : "/app/".$current_page-1;
    $next = $current_page >= $nbrPage ? "/app/".$nbrPage : "/app/".$current_page+1;
    $last = "/app/".$nbrPage;
    
    $range_end = $current_page * PER_PAGE;
    $range_start = $range_end - PER_PAGE;
    
    if($current_page == $nbrPage){
        $range_end = count($apprenants);
    }
    

    if (isset($_POST['details_promo']) && isset($_POST['idPromotion'])){
        if(!empty($_POST['idPromotion'])){
            $_SESSION['idPromotion'] = (integer) $_POST['idPromotion'];
        }
    }
?>