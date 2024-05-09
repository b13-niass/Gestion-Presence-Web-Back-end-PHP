<?php 

function pageNameGenerate(array $request,array $pages){
    $uri = "login";
    $result = null;
    // dd($request);

    if(!isset($_SESSION['user_login']) || empty($_SESSION['user_login'])){
        $uri = "login";
    }else{
        if(isset($request['search_matricule']) || isset($request['filtre_apprenant'])){
            $uri = $request['page'];
        }else{
            if (isset($request['page']) && !empty($request['page'])){
                if($request['page'] != "/"){
                    $resource = explode('/', $request['page']);
                    // dd($resource);   
                    $uri = $resource[1];
                        // dd($uri);
                    }
            }
        }
    }
    // dd($uri);
    if(array_key_exists($uri, $pages)){
        $result= $pages[$uri];
        array_push($result, $uri);
        // dd($result);
    }else{
        $result = ["404"];
    }

    return $result;
}

function vdp($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data){
    echo "<pre >";
    var_dump($data);
    echo "</pre>";
    die();
}

function limitTempsDeConnexion($temps){
    if (isset($_SESSION['LAST_ACTIVITY'])) {
        $expireAfter = $temps * 60;
        $currentTime = time();
        $lastActivityTime = $_SESSION['LAST_ACTIVITY'];
        $timeElapsed = $currentTime - $lastActivityTime;
        if ($timeElapsed > $expireAfter) {
            session_unset(); 
            session_destroy();  
            return 'login';
        }
    }
    return false;
}

function debutTempsDeConnexion(){
    if (!isset($_SESSION['LAST_ACTIVITY'])) {
        $_SESSION['LAST_ACTIVITY'] = time();
    }
}


/**
 * Debut Pagination Function
 */

function listPaginate($per_page, $listes, $page_number){
    
    if(isset($listes) && !empty($listes)){
        
        $nbrPage = ceil(count($listes)/$per_page);
        $fin = $page_number * $per_page;
        $debut = $fin - $per_page;
       
        if($nbrPage == $page_number){
            for($i=$debut; $i < count($listes); $i++){
                $tabPaginate[] = $listes[$i];
            }
        }else{
            for($i=$debut; $i < $fin; $i++){
                $tabPaginate[] = $listes[$i];
            }
        }
        return $tabPaginate;
    }else{
        return [];
    }
    // dd($tabPaginate);
}

function getCurrentPage($nbrPage){
    $current_page = 1;
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
    return $current_page;
}

function getNbrPage(array $listes, int $peer_page){
    return ceil(count($listes)/ $peer_page);
}

function genererPaginationTemplate($uri, $current_page, $nbrPage,$per_page, $listes){
    $first = "/$uri/1";
    $previous = $current_page <= 1 ? "/$uri/1" : "/$uri/".$current_page-1;
    $next = $current_page >= $nbrPage ? "/$uri/".$nbrPage : "/$uri/".$current_page+1;
    $last = "/$uri/".$nbrPage;

    $range_end = $current_page * $per_page;
    $range_start = $range_end - $per_page;
    $nbreElement = count($listes);

    if($current_page == $nbrPage){
        $range_end = count($listes);
    }

    $pagination_html = '
    <div class="pagination">
        <span>' . ($range_start + 1) . ' - ' . $range_end . ' of ' . $nbreElement . '</span>
        <div class="pagination-right">
            <a href="' . $first . '" class="pagination-link first-page ' . ($current_page == 1 ? 'disabled-link' : '') . '">|<i class="fa-solid fa-chevron-left"></i></a>
            <a href="' . $previous . '" class=" pagination-link previous ' . ($current_page == 1 ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-left"></i></a>
            <span class="pagination-numbers">' . $current_page . '</span>
            <a href="' . $next . '" class="pagination-link next ' . ($current_page == $nbrPage ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-right"></i></a>
            <a href="' . $last . '" class="pagination-link last-page ' . ($current_page == $nbrPage ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-right"></i>|</a>
        </div>
    </div>';

    echo $pagination_html;
}

function genererPaginationTemplatePost($current_page, $nbrPage,$per_page, $listes){
    $first = 1;
    $previous = $current_page <= 1 ? 1 : $current_page-1;
    $next = $current_page >= $nbrPage ? $nbrPage : $current_page+1;
    $last = $nbrPage;

    $range_end = $current_page * $per_page;
    $range_start = $range_end - $per_page;
    $nbreElement = count($listes);

    if($current_page == $nbrPage){
        $range_end = count($listes);
    }

    $pagination_html = '
    <form action="" style="width: 100%;" method="POST">
    <div class="pagination" style="width: 100%;">
        <span>' . ($range_start + 1) . ' - ' . $range_end . ' of ' . $nbreElement . '</span>
        <div class="pagination-right" style="column-gap: 11px;">
            <button style="border:none" type="submit" name="first-paginate" value="' . $first . '" class="pagination-link first-page ' . ($current_page == 1 ? 'disabled-link' : '') . '">|<i class="fa-solid fa-chevron-left"></i></button>
            <button style="border:none" type="submit" name="previous-paginate" value="' . $previous . '" class=" pagination-link previous ' . ($current_page == 1 ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-left"></i></button>
            <span class="pagination-numbers">' . $current_page . '</span>
            <button style="border:none" type="submit" name="next-paginate" value="' . $next . '" class="pagination-link next ' . ($current_page == $nbrPage ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-right"></i></button>
            <button style="border:none" type="submit" name="last-paginate" value="' . $last . '" class="pagination-link last-page ' . ($current_page == $nbrPage ? 'disabled-link' : '') . '"><i class="fa-solid fa-chevron-right"></i>|</button>
        </div>
    </div>
    </form>
    ';

    echo $pagination_html;
}

/**
* Fin Pagination Function
*/


$keys = [
'matricule',
'nom',
'prenom',
'tel',
'referentiel',
'heure_arrivee',
'etat',
'date'
];

function getTodayDate(){
    return date('d-m-Y');
}

// $dateString = "13-01-2024";
// $dateString2 = "13-01-2024";
// $formattedDate = date('d-m-Y', strtotime($dateString));
// $formattedDate2 = date('d-m-Y', strtotime($dateString2));

// $timestamp = strtotime($dateString);

// var_dump($formattedDate === $formattedDate2);


// <button type="submit" name="activer_promotion"
// class="btn-primary  <?=  //$prom == $key+1 ? "disabled-btn" : '' ?/>">Activer</button> 