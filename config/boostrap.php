<?php

define("WEBROOT", "http://www.cheikh.ibrahima.dieng:8013/projet");
define("ENVIRONNEMENT", "DEV");
define("FILES", "http://www.cheikh.ibrahima.dieng:8013/projet/model/files/");
/**
 * Pagination
 */
define('PER_PAGE', 10);


if(ENVIRONNEMENT == "DEV"){
    require_once "../config/helpers.php";
}else{
    include_once "../config/helpers.php";
}


$page = "login";
if (isset($_GET['page']) && !empty($_GET['page'])){
    if($_GET['page'] != "/"){
        $resource = explode('/', $_GET['page']);
        $page = $resource[1];
    }
}


if(isset($_POST['search_matricule'])){
    $page = $_POST['page'];
}


if(isset($_POST['filtre_apprenant'])){
    $page = $_POST['page'];
}

$models = [
    'app' => 'apprenants',
    'pre' => 'presences',
    'pro' => 'promos',
    'ref' => 'referentiels'
];


$pages = [
    'app' => 'list_apprenants',
    'pre' => 'list_presences',
    'pro' => 'list_promos',
    'ref' => 'list_referentiels',
    'create-pro1' => 'create_promo_1',
    'create-pro2' => 'create_promo_2'
];


if(array_key_exists($page, $pages)){
    $page_styles = $pages[$page];
}

if(array_key_exists($page, $models)){
    $model = $models[$page];
    require_once "../model/$model.model.php";
}