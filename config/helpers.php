<?php 

function dd($data){
    echo "<pre >";
    var_dump($data);
    echo "</pre>";
    die();
}


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


function read_write_files($file_name, $mode, $data = null){
    
    if($data != null){
        return $data;
    }
    
}