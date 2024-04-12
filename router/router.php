<?php

    if($page === "login" || $page === "" || $page == null){
        require_once "../template/login.html.php";
    }else{
        if($page != "404"){
        
        $controller = pageNameGenerate($_REQUEST,$pages)[1];
        
        require_once  "../template/partials/menu_vertical.html.php";

?>
<div class="right">

    <?php 
        if(isset($controller)){
            require_once "../controller/$controller.controller.php";
        }
        require_once  "../template/partials/menu_horizontal.html.php";
        require_once  "../template/$page.html.php";
        require_once  "../template/partials/footer.html.php";
?>

</div>

<?php 
        }else{
            require_once "../template/$page.html.php";
        }
    }
    
?>