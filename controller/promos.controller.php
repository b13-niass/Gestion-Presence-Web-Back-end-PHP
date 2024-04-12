<?php 
   require_once "../model/$controller.model.php";
   
   if($uri_ == "pro"){

    if(isset($_POST['activer_promotion'])){
        $_SESSION['promotion_active'] =(integer) $_POST['idPromotion'];
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
        $current_page = getCurrentPage($nbrPage);
        
        if(count($promotions) == 0){
            $promotionsPaginate = [];
        }else{
            $promotionsPaginate = listPaginate($per_page, $current_page, $promotions);
        }
   }

?>