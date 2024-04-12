<?php 

require_once "../model/$controller.model.php";

if($uri_ == "pre"){

   $dateToday = getTodayDate();
    
    $presencesPaginate = null;
    $presences = findAllPresence($_SESSION['promotion_active']);

    function getReferentiels(){
        include "../model/referentiels.model.php";
        return findAllReferentiel($_SESSION['promotion_active']);
    }

    $les_ref_du_promos = getReferentiels();

    // dd($les_ref_du_promos);
    if(!isset($_SESSION['per_page_pre'])){
        $_SESSION['per_page_pre'] = 10;
    }

    if(isset($_POST['per_page_pre'])){
        $_SESSION['per_page_pre'] = $_POST['per_page_pre'];
    }

    $per_page = (integer) $_SESSION['per_page_pre'];
    
    if(!isset($_SESSION['filter_presence']) && !isset($_POST['search_presence']) && !isset($_SESSION['all_presence'])){
        // $presences = findAllPresence();
        $_SESSION['filter_presence']['date'] = getTodayDate();
        $presences = findAllPresenceSearch($_SESSION['filter_presence']['date'], $presences);
        
    }

    if(isset($_POST['all_presence'])){
        unset($_SESSION['filter_presence']);
        unset($_SESSION['search_matricule']);
        $_SESSION['filter_presence'] = null;
        $_SESSION['search_matricule'] = null;
        $_SESSION['all_presence'] = 1;
        $presences = findAllPresence($_SESSION['promotion_active']);
    }

    if(isset($_SESSION['filter_presence']) && !isset($_POST['search_presence'])){ 
        $presences = findAllPresenceFilter($_SESSION['filter_presence'], $_SESSION['promotion_active']);
    }

    if(isset($_SESSION['filter_presence']) && isset($_POST['search_presence'])){ 
        if(isset($_POST['status']) && isset($_POST['referentiels']) && isset($_POST['date'])){
            if(!empty($_POST['status']) || !empty($_POST['referentiels']) || !empty($_POST['date'])){
                if(!empty($_POST['status'])){
                    $_SESSION['filter_presence']['status'] = $_POST['status'];
                }
                if(!empty($_POST['referentiels'])){
                    $_SESSION['filter_presence']['referentiels'] = $_POST['referentiels'];
                }
                if(!empty($_POST['date'])){
                    $_SESSION['filter_presence']['date'] = $_POST['date'];
                }
                $presences = findAllPresenceFilter($_SESSION['filter_presence'], $_SESSION['promotion_active']);
            }else{
                $presences = findAllPresenceFilter(null, $_SESSION['promotion_active']);
                
                unset($_SESSION['filter_presence']);
                // $_SESSION['filter_presence']=null;
                
            }
        }else{
            $presences = findAllPresenceFilter($_SESSION['filter_presence'], $_SESSION['promotion_active']);
        }
        
    }


    if(!isset($_SESSION['filter_presence']) && isset($_POST['search_presence'])){ 
        if(isset($_POST['status']) && isset($_POST['referentiels']) && isset($_POST['date'])){
            if(!empty($_POST['status']) || !empty($_POST['referentiels']) || !empty($_POST['date'])){
                if(!empty($_POST['status'])){
                    $_SESSION['filter_presence']['status'] = $_POST['status'];
                }
                if(!empty($_POST['referentiels'])){
                    $_SESSION['filter_presence']['referentiels'] = $_POST['referentiels'];
                }
                if(!empty($_POST['date'])){
                    $_SESSION['filter_presence']['date'] = $_POST['date'];
                }
                $presences = findAllPresenceFilter($_SESSION['filter_presence'],$_SESSION['promotion_active']);
            }else{
                $presences = findAllPresenceFilter(null ,$_SESSION['promotion_active']);
            }
        }else{
            $presences = findAllPresenceFilter(null, $_SESSION['promotion_active']);
        }
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && empty($_POST['search_matricule'])){
        unset($_SESSION['search_matricule']);
    }

    if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $presences = findAllPresenceSearch($_POST['search_matricule'], $presences);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && !empty($_POST['search_matricule'])){
        $presences = findAllPresenceSearch($_POST['search_matricule'], $presences);
        $_SESSION['search_matricule'] = $_POST['search_matricule'];
    }

    if(isset($_SESSION['search_matricule']) && !isset($_POST['search_matricule'])){
        $presences = findAllPresenceSearch($_SESSION['search_matricule'], $presences);
    }


    $nbrPage = getNbrPage( $presences, $per_page);
    $current_page = getCurrentPage($nbrPage);

    if(count($presences ) == 0){
        $presencesPaginate = [];
    }else{
        $presencesPaginate = listPaginate($per_page, $current_page, $presences);
    }

}

?>