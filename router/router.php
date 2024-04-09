<?php





if($page === "login" || $page === "" || $page == null){
                require_once "../template/login.html.php";
            }else{
                if(array_key_exists($page, $pages)){
                require_once  "../template/partials/menu_vertical.html.php";

        ?>
<div class="right">
    <?php 
                if(array_key_exists($page, $models)){
                    require_once "../controller/$models[$page].controller.php";
                }
                require_once  "../template/partials/menu_horizontal.html.php";
                $page = $pages[$page];
                require_once  "../template/$page.html.php";
                require_once  "../template/partials/footer.html.php";
            ?>
</div>
<?php 
            }else{
                require_once "../template/404.html.php";
            }
         }
            
?>