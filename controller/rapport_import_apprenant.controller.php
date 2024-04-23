<?php 

require_once "../model/rapport_import_apprenant.model.php";


$rapport_import = null;

if(isset($_POST['enregistrer_app'])){
   $_SESSION['rapport-import'] = $rapports = addApprenantByFile($_FILES);
}
if(!isset($_SESSION['per_page_app'])){
    $_SESSION['per_page_app'] = 10;
}

if(isset($_POST['per_page_app'])){
    $_SESSION['per_page_app'] = $_POST['per_page_app'];
}

$per_page = (integer) $_SESSION['per_page_app'];

if(isset($_SESSION['rapport-import'])){
    $rapport_import = $_SESSION['rapport-import'];
    $nbrPage = getNbrPage( $rapport_import['importer'], $per_page);
    if($nbrPage == 0){
        $nbrPage = 1;
    }
    $current_page = getCurrentPage($nbrPage);

    $importerPaginate = listPaginate($per_page, $rapport_import['importer'],$current_page);

}
