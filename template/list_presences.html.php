
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
                <form action="" method="post" style="width: 100%;">
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
                        ?>
                        <option value="1" <?= $ref == 1 ? "selected" : "" ?>>Dev Web/mobile</option>
                        <option value="2" <?= $ref == 2 ? "selected" : "" ?>>Référent Digital</option>
                        <option value="3" <?= $ref == 3 ? "selected" : "" ?>>Developpement Data</option>
                        <?php } else{?>
                        <option value="1">Dev Web/mobile</option>
                        <option value="2">Référent Digital</option>
                        <option value="3">Developpement Data</option>
                        <?php } ?>
                    </select>
                    <div>
                        <?php
                            if(isset($_SESSION['filter_presence']['date'])){
                                $date = $_SESSION['filter_presence']['date'];
                        ?>
                        <input type="text" class="date" name="date" id="" value="<?= $date ?>" />
                        <?php } else{?>
                        <input type="text" class="date" name="date" id="" placeholder="JJ/MM/AAAA" />
                        <?php } ?>

                    </div>
                    <button type="submit" name="search_presence">Rafraichir</button>
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
                    <select name="per-page" id="">
                        <option value="" selected>10</option>
                    </select>
                </div>
                <div class="pagination">
                    <span> <?= $range_start+1 ." - ". $range_end ?> of <?= count($presences )?></span>
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