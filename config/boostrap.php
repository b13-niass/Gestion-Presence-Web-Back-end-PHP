<?php

define("WEBROOT", "http://www.cheikh.ibrahima.dieng:8013/projet");
define("ENVIRONNEMENT", "DEV");
define("FILES", "/projet/model/files/");
define("UPLOAD_DIR", $_SERVER['DOCUMENT_ROOT'].'/projet/public/img/');
/**
 * Pagination
 */
define('PER_PAGE', 10);

if(ENVIRONNEMENT == "DEV"){
    require_once "../config/helpers.php";
    require_once dirname(__DIR__)."/orm/file.csv.php";
}else{
    include_once "../config/helpers.php";
}

/**
 * Load Promotion
 */
function LoadPromotion() {
    include "../model/promos.model.php";
    $promotions = findAllPromotion();
    $promo = getActivePromotion($promotions);
    $_SESSION['promotion_active'] =  (integer) $promo['number'];
}

if(!isset($_SESSION['promotion_active'])){
    LoadPromotion();
}

$pages = [
    'app' => ['list_apprenants', 'apprenants'],
    'pre' => ['list_presences', 'presences'],
    'pro' => ['list_promos', 'promos'],
    'ref' => ['list_referentiels', 'referentiels'],
    'login' => ['login'],
    'create-pro1' => ['create_promo_1', 'promos'],
    'create-pro2' => ['create_promo_2', 'promos'],
    'event' => ['list_evenements', 'evenements'],
    'rapport-import' => ['rapport_import_apprenant','rapport_import_apprenant']
];
$page = pageNameGenerate($_REQUEST,$pages)[0];
$uri_ = pageNameGenerate($_REQUEST,$pages)[2]??"";
$uri_all = pageNameGenerate($_REQUEST,$pages)??"";

// dd(getTodayDate());

$limit = limitTempsDeConnexion(500);
if($limit != false){
    $page = $limit;
}
