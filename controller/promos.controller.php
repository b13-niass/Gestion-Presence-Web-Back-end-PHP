<?php 
   require_once "../model/$controller.model.php";
   
   if($uri_ == "pro"){
    $promotion_active = $_SESSION['promotion_active'];
    if(isset($_POST['activer_promotion'])){
        $_SESSION['promotion_active'] = (integer) $_POST['idPromotion'];
        header("Location: /pro");
    }else{
        if(isset($_POST['idPromotion']) && $_SESSION['promotion_active'] == $_POST['idPromotion']){
            $_SESSION['promotion_active'] = 0;
            header("Location: /pro");
        }
    }
    
    $prom = (integer) $_SESSION['promotion_active'];
    if(!isset($_SESSION['per_page_pro'])){
        $_SESSION['per_page_pro'] = 10;
    }

    if(isset($_POST['per_page_pro'])){
        $_SESSION['per_page_pro'] = $_POST['per_page_pro'];
    }

    $per_page = (integer) $_SESSION['per_page_pro'];
    
        $promotions = findAllPromotion();
        $nbrPage = getNbrPage( $promotions, $per_page);
        if($nbrPage == 0){
            $nbrPage = 1;
        }
        $current_page = getCurrentPage($nbrPage);
        
        if(count($promotions) == 0){
            $promotionsPaginate = [];
        }else{
            $promotionsPaginate = listPaginate($per_page, $promotions, $current_page );
        }
   }

?>