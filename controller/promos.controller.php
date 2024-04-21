<?php 
   require_once "../model/$controller.model.php";
   require_once("../validations/validations.php");
  
   debutTempsDeConnexion();
   
   if($uri_ == "pro"){
    $promotion_active = $_SESSION['promotion_active'];
    if(isset($_POST['activer_promotion'])){
        checkedPromotions((integer)$_SESSION['promotion_active'], (integer) $_POST['idPromotion']);
        $_SESSION['promotion_active'] = (integer) $_POST['idPromotion'];
        header("Location: /pro");
    }else{
        if(isset($_POST['idPromotion']) && $_SESSION['promotion_active'] == $_POST['idPromotion']){
            checkedPromotions((integer)$_SESSION['promotion_active'], (integer) $_POST['idPromotion']);
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

   if($uri_ == "create-pro1"){
        $resultCreationPromo = [
            'libelle_req' => 'none',
            'dateDebut_req' => 'none',
            'dateFin_req' => 'none',
            'dateDiffInvalide' => 'none',
            'promo_exist' => 'none'
        ];
        $resultAjouterReferentiel = [
            'libelle_req' => 'none',
            'dateDebut_req_ref' => 'none',
            'dateFin_req_ref' => 'none',
            'dateDiffInvalide' => 'none'
        ];

        function createPromotion($request, $resultCreationPromo){
            if(isset($request['creer_promo'])){
                if(isset($request['libelle']) && !empty($request['libelle'])){
                    
                        if(isset($request['dateDebut']) && !empty($request['dateDebut'])){
                            if(isset($request['dateFin']) && !empty($request['dateFin'])){
                                extract($request);
                                $libelle = strtolower(trim($libelle));
                                if(is_bool(ifExistPromo($libelle))){
                                    $promotions = findAllPromotion();
                                    $number = (int) explode(' ', $libelle)[1];
                                    $diff = date_diff(date_create(formatDateToEnglish($dateDebut)),
                                    date_create(formatDateToEnglish($dateFin)));
                                    if((int)$diff->format("%R%m") >= 4){
                                        $promo = [
                                            'libelle' => $libelle,
                                            'dateDebut'=> formatDateToEnglish($dateDebut),
                                            'dateFin' => formatDateToEnglish($dateFin),
                                            'number' => $number,
                                            'statut'=> 0
                                        ];
                
                                        array_push($promotions, $promo);
                                        return writePromotions($promotions);

                                    }else{
                                        $resultCreationPromo['dateDiffInvalide'] = 'block';
                                    }
                                }else{
                                    $resultCreationPromo['promo_exist'] = 'block';
                                }
                            }else{
                                $resultCreationPromo['dateFin_req'] = 'block';
                            }

                        }else{
                            if(!isset($request['dateFin']) || empty($request['dateFin'])){
                                $resultCreationPromo['dateFin_req'] = 'block';
                            }
                            $resultCreationPromo['dateDebut_req'] = 'block';
                        }

                }else{
                    if(!isset($request['dateDebut']) || empty($request['dateDebut'])){
                        $resultCreationPromo['dateDebut_req'] = 'block';
                    }
                    if(!isset($request['dateFin']) || empty($request['dateFin'])){
                        $resultCreationPromo['dateFin_req'] = 'block';
                    }
                    $resultCreationPromo['libelle_req'] = 'block';
                }
            }
            return $resultCreationPromo;
        }
        function ajouterReferentiel($request, $resultAjouterReferentiel){
            if(isset($request['ajouter_ref'])){
                if(isset($request['libelle']) && !empty($request['libelle'])){        
                    extract($request);
                    $libelle = strtolower(trim($libelle));
                    if(is_bool(ifExistPromo($libelle))){
                        $promotions = findAllPromotion();
                        $number = (int) explode(' ', $libelle)[1];
                        if(isset($dateDebut) && !empty($dateDebut)){
                            if(isset($dateFin) && !empty($dateFin)){
                                $diff = date_diff(date_create(formatDateToEnglish($dateDebut)),
                                date_create(formatDateToEnglish($dateFin)));
                                if((int)$diff->format("%R%m") >= 4){
                                    $promo = [
                                        'libelle' => $libelle,
                                        'dateDebut'=> formatDateToEnglish($dateDebut),
                                        'dateFin' => formatDateToEnglish($dateFin),
                                        'number' => $number,
                                        'statut'=> 0
                                    ];
            
                                    $_SESSION['add_promotion'] = $promo;
                                    header('Location: /create-pro2',true, 301);
                                }else{
                                    $resultAjouterReferentiel['dateDiffInvalide'] = 'block';
                                }
                            }else{
                                $resultAjouterReferentiel['dateFin_req_ref'] = 'block';
                            }
                        }else{
                           if(isset($dateFin) || empty($dateFin)){
                            $resultAjouterReferentiel['dateFin_req_ref'] = 'block';
                           } 
                           $resultAjouterReferentiel['dateDebut_req_ref'] = 'block';
                        }
                    }else{
                        $_SESSION['add_promotion'] = ifExistPromo($libelle);
                        header('Location: /create-pro2',true, 301);
                    }
                }else{
                    $resultAjouterReferentiel['libelle_req'] = 'block';
                }
            }
            return $resultAjouterReferentiel;
        }



        $resultCreationPromo = createPromotion($_REQUEST, $resultCreationPromo);
        // dd($resultCreationPromo);
        if(is_bool($resultCreationPromo)){
            $resultCreationPromo = [
                'libelle_req' => 'none',
                'dateDebut_req' => 'none',
                'dateFin_req' => 'none',
                'dateDiffInvalide' => 'none',
                'promo_exist' => 'none'
            ];
        }
        
        $resultAjouterReferentiel= ajouterReferentiel($_REQUEST, $resultAjouterReferentiel);

        
   }

   if($uri_ == "create-pro2"){
    $promoReferentiels = [];
    $la_promo = null;
    if(isset($_SESSION["add_promotion"])){
        $la_promo = (int)$_SESSION["add_promotion"]["number"];
        $promoReferentiels = getPromoRef($la_promo);
        $diffPromoReff = getDiffRefPromo($la_promo);
        if(isset($_POST['create_promo'])){
            $promotion = $_SESSION["add_promotion"];
            $referentiels = $_POST['referentiels'];
            // dd($referentiels);
            if(is_bool(ifExistPromo($promotion['libelle']))){
               $result = addPromotion($promotion['libelle'], $promotion['dateDebut'],
                    $promotion['dateFin'], $promotion['number']); 
                foreach($referentiels as $referentiel){
                    $result = addReferentiel((int)$referentiel, $la_promo);
                }
                if($result){
                    $_SESSION["add_promotion"] = null;
                    header("Location: /pro");
                }else{
                    die("Erreur de sauvegarde");
                }
            }else{
                // foreach($referentiels as $referentiel){
                    $result = addReferentiel($referentiels, $la_promo);
                // }
              
                    $_SESSION["add_promotion"] = null;
                    header("Location: /pro");
                
            }
        }

    }else{
        header("Location: /create-pro1", true, 301);
    }
       
        // function ajouterReferentielPromo($session){
            
        // }


   }



?>