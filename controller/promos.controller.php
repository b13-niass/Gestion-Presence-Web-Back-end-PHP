<?php 
        $current_page = 1;
        $promotions = findAllPromotion();
        $nbrPage = ceil(count($promotions)/ PER_PAGE);
    
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
        
        $promotionsPaginate = listPaginate(PER_PAGE, $current_page, $promotions);
        
        $first = "/pro/1";
        $previous = $current_page <= 1 ? "/pro/1" : "/pro/".$current_page-1;
        $next = $current_page >= $nbrPage ? "/pro/".$nbrPage : "/pro/".$current_page+1;
        $last = "/pro/".$nbrPage;
        
        $range_end = $current_page * PER_PAGE;
        $range_start = $range_end - PER_PAGE;
        
        if($current_page == $nbrPage){
            $range_end = count($promotions);
        }
        
?>