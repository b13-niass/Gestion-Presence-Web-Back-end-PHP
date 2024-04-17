<div class="right-middle">
    <div class="breadcrumbs">
    <div> 
        <a href="/pro" style="text-decoration: none; color:#009186;font-weight: bold;">
            <span>
                Promotion <?= $promotion_active != 0 ? $promotion_active : '_ _'  ?>
            </span>
        </a>
    </div>
        <div>
            <span>Promos ></span>
            <span>Liste</span>
        </div>
    </div>
    <div class="content">
        <div class="tableau">
            <div class="tableau-titre">
                <div>
                    Liste des Promotions
                    <span>(<?= count($promotions) ?>)</span>
                </div>
                <div class="search-add">
                    <input type="text" name="search" id="" placeholder="Rechercher ici..." />
                    <a href="/create-pro1">
                        <i class="fa fa-plus"></i>Nouvelle
                    </a>
                </div>
            </div>
            <div class="tableau-head">
                <div class="row">
                    <div class="col">Libelle</div>
                    <div class="col">Date Début</div>
                    <div class="col">Date Fin</div>
                    <div class="col">Actions</div>
                </div>
            </div>
            <div class="tableau-body">
                <?php
              
                foreach ($promotionsPaginate as $key=>$promotion) {
            ?>
                <div class="row">
                    <div class="col">
                        <i class="services-icon"></i>
                        <span style="color: green;"><?= $promotion['libelle'] ?></span>
                    </div>
                    <div class="col"><?= $promotion['dateDebut'] ?></div>
                    <div class="col"><?= $promotion['dateFin'] ?></div>
                    <div class="col">
                        <form action="" method="post">
                            <input type="hidden" name="idPromotion" value="<?= $promotion['number'] ?>">
                            <input type="hidden" name="page" value="/pro">
                            <input type="checkbox" name="activer_promotion" class="to-check" 
                                <?= $promotion_active == (integer)$promotion['number'] ? 'checked' : ''?> 
                                onchange="this.form.submit()">
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class=" tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <form action="" method="POST">
                        <input type="hidden" name="page" value="/pro">
                        <select name="per_page_pro" onchange="this.form.submit()" id="">
                            <option value="5" <?= $per_page == 5 ? 'selected' : '' ?>>5</option>
                            <option value="10" <?= $per_page == 10 ? 'selected' : '' ?>>10</option>
                            <option value="15" <?= $per_page == 15 ? 'selected' : '' ?>>15</option>
                        </select>
                    </form>
                </div>
                <?php 
                    genererPaginationTemplate($uri_, $current_page, $nbrPage,$per_page, $promotions);
                
              
                ?>
            </div>
        </div>
    </div>
</div>