<?php
    function getCurrentPage($nbrPage){
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
    }
?>