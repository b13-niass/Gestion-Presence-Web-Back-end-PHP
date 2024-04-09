<?php 
session_start();
// unset($_SESSION['filter_presence']);
// unset($_SESSION['search_matricule']);
// dd($_SESSION['search_matricule']);
// dd($_SESSION['filter_presence']);
$current_page = 1;
$presencesPaginate = null;
$presences = findAllPresence();


// $dateString = "13-01-2024";
// $dateString2 = "13-01-2024";
// $formattedDate = date('d-m-Y', strtotime($dateString));
// $formattedDate2 = date('d-m-Y', strtotime($dateString2));

// $timestamp = strtotime($dateString);

// var_dump($formattedDate === $formattedDate2);




if(!isset($_SESSION['filter_presence']) && !isset($_POST['search_presence'])){
    // $presences = findAllPresence();
    $presences = findAllPresenceSearch('09-04-2024', $presences);

}

if(isset($_POST['all_presence'])){
    unset($_SESSION['filter_presence']);
    unset($_SESSION['search_matricule']);
    $_SESSION['filter_presence'] = null;
    $_SESSION['search_matricule'] = null;
    $presences = findAllPresence();
}

if(isset($_SESSION['filter_presence']) && !isset($_POST['search_presence'])){ 
    $presences = findAllPresenceFilter($_SESSION['filter_presence']);
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
            $presences = findAllPresenceFilter($_SESSION['filter_presence']);
        }else{
            $presences = findAllPresenceFilter();
            
            unset($_SESSION['filter_presence']);
            
        }
    }else{
        $presences = findAllPresenceFilter($_SESSION['filter_presence']);
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
            $presences = findAllPresenceFilter($_SESSION['filter_presence']);
        }else{
            $presences = findAllPresenceFilter();
        }
    }else{
        $presences = findAllPresenceFilter();
    }
}

if(!isset($_SESSION['search_matricule']) && isset($_POST['search_matricule']) && empty($_POST['search_matricule'])){
    // $presences = findAllPresenceSearch($_POST['search_matricule'], $presences);
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


$nbrPage = ceil(count($presences)/ PER_PAGE);

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


if(count($presences ) == 0){
    $presencesPaginate = [];
}else{
    $presencesPaginate = listPaginate(PER_PAGE, $current_page, $presences);
}


$first = "/pre/1";
$previous = $current_page <= 1 ? "/pre/1" : "/pre/".$current_page-1;
$next = $current_page >= $nbrPage ? "/pre/".$nbrPage : "/pre/".$current_page+1;
$last = "/pre/".$nbrPage;

$range_end = $current_page * PER_PAGE;
$range_start = $range_end - PER_PAGE;

if($current_page == $nbrPage){
    $range_end = count($presences);
}
 

?>