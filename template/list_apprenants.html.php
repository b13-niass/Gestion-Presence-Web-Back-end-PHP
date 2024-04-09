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
        <div>Promotion: <span>Promotion 6</span></div>
        <div>Référentiel: <span>Dev Web/Mobile</span></div>
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
                    <a href="#nouvelle-1"> <i class="fa fa-plus"></i>Nouvelle </a>
                    <a href="#insertion-masse"> Insertion en masse </a>
                    <a href="#">
                        <i class="fa-solid fa-right-to-bracket"></i>Fichier model
                    </a>
                    <a href="#">Liste des Exclus </a>
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
                        if($apprenant['idPromotion'] === $_SESSION['idPromotion']):    
                ?>
                <div class="row">
                    <div class="col">
                        <img src="/projet/public/icons/<?= $apprenant['image'] ?>" width="23%" alt="" srcset="" />
                    </div>
                    <div class="col"><?= $apprenant['nom'] ?></div>
                    <div class="col"><?= $apprenant['prenom'] ?></div>
                    <div class="col"><?= $apprenant['email'] ?></div>
                    <div class="col"><?= $apprenant['genre'] ?></div>
                    <div class="col"><?= $apprenant['telephone'] ?></div>
                    <div class="col"><span class="span-bleuf"></span></div>
                </div>
                <?php 
                        endif;
                    endforeach; 
                ?>
            </div>
            <div class=" tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <form action="" method="POST">
                        <input type="hidden" name="page" value="app">
                        <select name="per_page_app" onchange="this.form.submit()" id="">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </form>
                </div>
                <div class="pagination">
                    <span> <?= $range_start+1 ." - ". $range_end ?> of <?= count($apprenants )?></span>
                    <div class="pagination-right">
                        <a href="<?= $first ?>" class="pagination-link first-page 
                        <?= $current_page == 1 ? 'disabled-link' : ''?> ">|<i class="fa-solid fa-chevron-left"></i></a>
                        <a href="<?= $previous ?>"
                            class=" pagination-link previous <?= $current_page == 1 ? 'disabled-link' : ''?>">
                            <i class="fa-solid fa-chevron-left"></i></a>
                        <span class="pagination-numbers"> <?= $current_page ?></span>
                        <a href="<?= $next ?>"
                            class="pagination-link next <?= $current_page == $nbrPage ? 'disabled-link' : ''?>"><i
                                class="fa-solid fa-chevron-right"></i></a>
                        <a href="<?= $last ?>"
                            class="pagination-link last-page <?= $current_page == $nbrPage ? 'disabled-link' : ''?>"><i
                                class="fa-solid fa-chevron-right"></i>|</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="insertion-masse" class="overlay1">
    <div class="popup">
        <!-- <a class="close" href="#">&times;</a> -->
        <form action="" method="post">
            <h4>Choisir un fichier Excel</h4>
            <div>
                <span>Drop files here or click to upload</span>
                <input type="file" name="file" id="file" />
            </div>
        </form>
        <div>
            <a class="close" href="#">Fermer</a>
            <a href="#">Enregistrer</a>
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