<div class="right-middle">
    <div class="breadcrumbs">
        <span>Apprenants</span>
        <div>
            <span>Promos ></span>
            <span>Liste ></span>
            <span>Detail ></span>
            <span>Liste</span>
        </div>
    </div>
    <div class="indication-promo">
        <div>Promotion:
             <a href="/pro" style="text-decoration: none; color:#009186;font-weight: bold;">
                <span>
                    Promotion <?= $promotion_active != 0 ? $promotion_active : '_ _' ?>
                </span>
            </a>
        </div>
        <div class="dropdown-b" style="margin-right: 5%">
            <button class="dropbtn-b">Filtre Par Référentiel</button>
            <div class="dropdown-content-b">
                <form action="" method="POST" id="formRef">
                    <?php foreach($referentiels_promo as $key => $ref) : ?>
                    <label for="idRef<?=$ref['id']?>"> <input id="idRef<?=$ref['id']?>" class="check-ref" type="checkbox" name="referentiels[]" value="<?= $ref['id'] ?>"><span> <?= $ref['libelle'] ?></span></label>
                        <input style="visibility: hidden;" type="submit" name="filtre_ref">
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content-left" style="width:5%;align-items: center;">
            <span style="width: 50px">1</span>
            <span></span>
        </div>
        <div class=" tableau">
            <span style="font-size: 1rem; align-self: start">Apprenant</span>
            <div class="tableau-titre">
                <div>
                    Liste des Promotions
                    <span>(<?= count($apprenants) ?>)</span>
                </div>
                <div class="search-add">
                    <a href=""> <i class="fa fa-plus"></i>Nouvelle </a>
                    <a href="#insertion-masse"> Insertion en masse </a>
                    <form action="" method="POST">
                       <button type="submit" name="exemple-file">
                        <i class="fa-solid fa-right-to-bracket"></i>Fichier model
                       </button> 
                    </form>
                    <a href="#liste-exclu">Liste des Exclus </a>
                </div>
            </div>
            <div class="tableau-titre tab-filtre">
                <i class="fa fa-search"></i>
                <form action="" method="post" style="width: 100%;height: 100%;">
                    <input type="text" name="filtre_apprenant" placeholder="Filter" id="" value="" />
                    <input type="hidden" name="page" value="app" id="">
                </form>
            </div>
            <img src="/projet/public/icons/save.png" style="width: 5%; align-self: self-start" alt="" />
            <div class="tableau-head">
                <div class="row">
                    <div class="col">Image</div>
                    <div class="col">Nom</div>
                    <div class="col">Prénom</div>
                    <div class="col">Email</div>
                    <div class="col">Genre</div>
                    <div class="col">Téléphone</div>
                    <div class="col">Action</div>
                </div>
            </div>
            <div class="tableau-body">
                <?php 
                
                    // $idPromotion = (integer) $resource[2]; 
                    foreach($apprenantsPaginate as $apprenant):   
                ?>
                <div class="row">
                    <div class="col">
                        <img src="/projet/public/icons/<?= $apprenant['image'] ?>" width="23%" alt="" srcset="" />
                    </div>
                    <div class="col"><?= $apprenant['nom'] ?></div>
                    <div class="col"><?= $apprenant['prenom'] ?></div>
                    <div class="col"><?= $apprenant['email'] ?></div>
                    <div class="col"><?= $apprenant['genre'] == 1 ? 'M' : 'F' ?></div>
                    <div class="col"><?= $apprenant['telephone'] ?></div>
                    <div class="col action-btn" style="display: flex;flex-direction: column;row-gap:2px;">
                        <a href="#carte-modal" style="text-decoration: none;background-color:#009186;color:white;padding: 0 18px;border-radius:3px;">Carte</a>
                        <a href="#nouvelle-1" style="text-decoration: none;background-color:black;color:white;padding: 0 10px;border-radius:3px;">Modifier</a>
                    </div>
                </div>
                <?php 
                    endforeach; 
                ?>
            </div>
            <div class=" tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <form action="" method="POST">
                        <input type="hidden" name="page" value="/app">
                        <select name="per_page_app" onchange="this.form.submit()" id="">
                            <option value="5" <?= $per_page == 5 ? 'selected' : '' ?>>5</option>
                            <option value="10" <?= $per_page == 10 ? 'selected' : '' ?>>10</option>
                            <option value="15" <?= $per_page == 15 ? 'selected' : '' ?>>15</option>
                        </select>
                    </form>
                </div>
                <?php 
                    genererPaginationTemplate($uri_, $current_page, $nbrPage,$per_page, $apprenants);
                ?>
            </div>
        </div>
    </div>
</div>

<div id="insertion-masse" class="overlay1">

    <div class="popup">
        <!-- <a class="close" href="#">&times;</a> -->
        <h4>Choisir un fichier Excel</h4>
        <form action="/rapport-import" method="post" enctype="multipart/form-data">
            <div>
                <span>Drop files here or click to upload</span>
                <input type="file" name="file" id="file" />
            </div>
            <button style="visibility: hidden;" id="btnSubmitInsMass" type="submit" name="enregistrer_app">Enregistrer</button>
        </form>
        <div>
            <a class="close" href="#">Fermer</a>
            <label for="btnSubmitInsMass">Enregistrer</label>
        </div>
    </div>
 
</div>

<div id="nouvelle-1" class="overlay2">
    <div class="popup2">
        <div class="entete">
            <h3>Nouvel Apprenant</h3>
            <a class="close" href="#">&times;</a>
        </div>
        <div class="popup2-body">
            <div class="item1">
                <span>1</span>
                <span>Information Perso</span>
                <span></span>
                <span>2</span>
                <span>informations Suplémentaire</span>
            </div>
            <div class="item2"></div>
            <form action="" class="form3">
                <div class="form-input">
                    <span>Nom</span>
                    <input type="text" name="nom" placeholder="Entere le nom" id="" />
                </div>
                <div class="form-input">
                    <span>Prénom</span>
                    <input type="text" name="prenom" placeholder="Entere le prénom" id="" />
                </div>
                <div class="form-input">
                    <span>Email</span>
                    <input type="text" name="email" placeholder="Entere l'email" id="" />
                </div>
                <div class="form-input">
                    <span>Téléphone</span>
                    <input type="text" name="telephone" placeholder="Entere le téléphone" id="" />
                </div>
                <div class="form-input">
                    <span>Sexe</span>
                    <input type="text" name="sexe" placeholder="Choisir le sexe" id="" />
                </div>
                <div class="form-input">
                    <span>Date Naissance</span>
                    <input type="text" name="date" placeholder="JJ/MM/AAAA" id="" />
                </div>
                <div class="form-input">
                    <span>Lieu Naissance</span>
                    <input type="text" name="lieunaiss" placeholder="Entere le lieu de naissance" id="" />
                </div>
                <div class="form-input">
                    <span>N° CNI</span>
                    <input type="text" name="nom" placeholder="Entere le numéro de la carte d'identité" id="" />
                </div>
                <div class="form-btn">
                    <input type="checkbox" class="form-btn-ch" />
                    <button class="btn-next">Suivant</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup3">
        <div class="entete">
            <h3>Nouvel Apprenant</h3>
            <a class="close" href="#">&times;</a>
        </div>
        <div class="popup3-body">
            <div class="item3">
                <span>1</span>
                <span>Information Perso</span>
                <span></span>
                <span>2</span>
                <span>informations Suplémentaire</span>
            </div>
            <div class="item4"></div>
            <form action="">
                <div class="form-input">
                    <span>Nom & Prenom tuteur</span>
                    <input type="text" name="nom" placeholder="Entere le nom" id="" />
                </div>
                <div class="form-input">
                    <span>Contact Tuteur</span>
                    <input type="text" name="prenom" placeholder="Entere le prénom" id="" />
                </div>
                <div class="form-input">
                    <span>Photocopie CNI</span>
                    <input type="file" name="email" placeholder="Entere l'email" id="" />
                </div>
                <div class="form-input">
                    <span>Extrait de naissance</span>
                    <input type="file" name="telephone" placeholder="Entere le téléphone" id="" />
                </div>
                <div class="form-input">
                    <span>Diplome</span>
                    <input type="file" name="sexe" placeholder="Choisir le sexe" id="" />
                </div>
                <div class="form-input">
                    <span>Casier judiciaire</span>
                    <input type="file" name="date" placeholder="" id="" />
                </div>
                <div class="form-input">
                    <span>Visite Médicale</span>
                    <input type="file" name="lieunaiss" placeholder="Entere le lieu de naissance" id="" />
                </div>

                <div class="form3-btn">
                    <button class="btn-next">
                        <i class="fa fa-close"></i>Cancel
                    </button>
                    <button class="btn-next1">
                        <i class="fa fa-plus"></i> Créer nouvel apprenant
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="liste-exclu" class="overlay3">

    <div class="popup4">
       <div class="popup4-header">
       <a class="close" href="#">&times;</a>
            Liste des apprenants qui ne se sont jamais connectés
       </div>
       <div class="popup4-body">
       <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Date de naissance</th>
        <th>Téléphone</th>
        <th>Référentiel</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
    <?php 
    if(isset($list_new_apprenant) && !empty($list_new_apprenant)){
        foreach($list_new_apprenant as $key => $value){
           
    ?>
    <tr>
        <td><?= $value['nom'] ?></td>
        <td><?= $value['prenom'] ?></td>
        <td><?= $value['email'] ?></td>
        <td><?= date('d-m-Y',strtotime($value['datenaiss'])) ?></td>
        <td><?= $value['tel'] ?></td>
        <td><?= $value['referentiel'] ?></td>
        <td style="padding: 0.3%">
            <form action="" method="POST" style="width:100%;height: 35px;">
                <input type="hidden" name="email" value="<?=$value['email']?>">
                <button type="submit" name="resend-mail" style="width:100%;height:80%;border:none;background-color:#009186;color:white;">
                    Renvoyer
                </button>
            </form>
        </td>
    </tr>
    <?php
        }    
    }    
    ?>

    </tbody>
  </table>
  
        </div>
        <div class="popup4-footer" style="width: 100%;display:flex;column-gap:5px;margin-top:5px;">
        <?php genererPaginationTemplatePost($current_page_new, $nbrPage_new,$per_page_new, $list_new_apprenant) ?>
        </div>

    </div>
 
</div>

<div id="carte-modal" class="overlay4">

    <div class="popup5">
        <a class="close" href="#">&times;</a>
        <div class="popup5-body">
        </div>
    </div>
 
</div>

<script>
    let formRef = document.querySelector('#formRef');
    console.log(formRef);
    formRef.addEventListener('keydown', function(event){
        // console.log(event);
        if(event.key == 'Enter'){
            formRef.submit();
        }
    });
</script>