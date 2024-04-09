<?php   

function listPaginate($per_page, $page_number=1, $listes){
    
    $nbrPage = ceil(count($listes)/$per_page);
    $fin = $page_number * $per_page;
    $debut = $fin - $per_page;

    if($nbrPage == $page_number){
        for($i=$debut; $i < count($listes); $i++){
            $tabPaginate[] = $listes[$i];
        }
    }else{
        for($i=$debut; $i < $fin; $i++){
            $tabPaginate[] = $listes[$i];
        }
    }
    
    return $tabPaginate;
}



?>