<div class="right-middle">
    <div class="breadcrumbs">
        <span>Presence</span>
        <div>
            <span>Presence ></span>
            <span>Liste</span>
        </div>
    </div>
    <div class="content">
        <div class="tableau">
            <div class="tableau-titre">
                <form action="" method="post" style="width: 80%;">
                    <select class="statut" name="status">
                        <option value="" selected>Statut</option>
                        <?php
                            if(isset($_SESSION['filter_presence']['status'])){
                                $etat = (integer) $_SESSION['filter_presence']['status'];
                        ?>
                        <option value="1" <?= $etat == 1 ? "selected" : "" ?>>Present</option>
                        <option value="2" <?= $etat == 2 ? "selected" : "" ?>>Absent</option>

                        <?php } else{?>
                        <option value="1">Present</option>
                        <option value="2">Absent</option>
                        <?php } ?>

                    </select>
                    <select class="referentiels" name="referentiels">
                        <option value="" selected>Referentiels</option>

                        <?php
                            if(isset($_SESSION['filter_presence']['referentiels'])){
                                $ref = (integer) $_SESSION['filter_presence']['referentiels'];
                                foreach($les_ref_du_promos as $ref_promo):
                                    if($ref_promo['status'] == 1):
                        ?>

                        <option value="<?= $ref_promo['id'] ?>" <?= $ref == $ref_promo['id']? "selected" : "" ?>>
                            <?= $ref_promo['libelle'] ?></option>

                        <?php 
                            endif;
                            endforeach;
                        } else{
                            foreach($les_ref_du_promos as $ref_promo):
                                if($ref_promo['status'] == 1):
                        ?>
                        <option value="<?= $ref_promo['id'] ?>"><?= $ref_promo['libelle'] ?></option>
                        <?php
                        endif;
                        endforeach;
                     } ?>
                    </select>
                    <div>
                        <?php
                            if(isset($_SESSION['filter_presence']['date'])){
                                $date = $_SESSION['filter_presence']['date'];
                        ?>
                        <input type="text" class="date" name="date" id="" value="<?= $date ?>" />
                        <?php } else{?>
                        <input type="text" class="date" name="date" id="" placeholder="JJ-MM-AAAA"
                            value="<?= $_SESSION['filter_presence']['date'] ?>" />
                        <?php } ?>

                    </div>
                    <button type="submit" name="search_presence" style="cursor: pointer;">Rafraichir</button>
                </form>
                <form action="" method="post" style="width: 20%;display:flex;justify-content: end;">
                    <button type="submit" name="all_presence" value="1" style="width: 30%;cursor: pointer;">All</button>
                </form>
            </div>
            <div class="tableau-head">
                <div class="row">
                    <div class="col">Matricule</div>
                    <div class="col">Nom</div>
                    <div class="col">Prénom</div>
                    <div class="col">Téléphone</div>
                    <div class="col">Référentiel</div>
                    <div class="col">Heure D'activité</div>
                    <div class="col">Status</div>
                </div>
            </div>
            <div class="tableau-body">
                <?php 
                    foreach ($presencesPaginate as $presence):
                ?>
                <div class="row">
                    <div class="col"><?= $presence['matricule'] ?></div>
                    <div class="col"><?= $presence['nom'] ?></div>
                    <div class="col"><?= $presence['prenom'] ?></div>
                    <div class="col"><?= $presence['tel'] ?></div>
                    <div class="col"><?= getReferentielName($presence['referentiel']) ?></div>
                    <div class="col"><span class="a_l_heure"><?= $presence['heure_arrivee'] ?></span></div>
                    <div class="col"><span
                            class="<?= $presence['etat'] === 1 ? 'present' : 'absent'  ?>"><?= $presence['etat'] === 1 ? 'Présent' : 'Absent'  ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <form action="" method="POST">
                        <input type="hidden" name="page" value="/pre">
                        <select name="per_page_pre" onchange="this.form.submit()" id="">
                            <option value="5" <?= $per_page == 5 ? 'selected' : '' ?>>5</option>
                            <option value="10" <?= $per_page == 10 ? 'selected' : '' ?>>10</option>
                            <option value="15" <?= $per_page == 15 ? 'selected' : '' ?>>15</option>
                        </select>
                    </form>
                </div>
                <?php 
                    genererPaginationTemplate($uri_, $current_page, $nbrPage,$per_page, $presences);
                ?>
            </div>
        </div>
    </div>
</div>