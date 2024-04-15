<?php

define("WEBROOT", "http://www.cheikh.ibrahima.dieng:8013/projet");
define("ENVIRONNEMENT", "DEV");
define("FILES", "/projet/model/files/");
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
    $promo = getLastPromotion($promotions);
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
    'create-pro1' => ['create_promo_1'],
    'create-pro2' => ['create_promo_2']
];
$page = pageNameGenerate($_REQUEST,$pages)[0];
$uri_ = pageNameGenerate($_REQUEST,$pages)[2]??"";

// dd(getTodayDate());