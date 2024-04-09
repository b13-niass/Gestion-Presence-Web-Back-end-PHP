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

$keys = [
    'matricule',
    'nom',
    'prenom',
    'tel',
    'referentiel',
    'heure_arrivee',
    'etat',
    'date'
];
function read_data_files($file_name, $mode, $keys){
    $file_name = FILES."/$file_name";
    $results = null;
    $row = 1;
    if (($handle = fopen($file_name, $mode)) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // $num = count($data);
            $row++;
            $results = array_combine($keys, $data);
            
        }
        fclose($handle);
    }
    return $results;
}

function write_data_files($file_name, $mode){

    
    
}