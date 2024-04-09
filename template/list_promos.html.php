<div class="right-middle">
    <div class="breadcrumbs">
        <span>Promotions</span>
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
                        <form action="/app" method="post">
                            <input type="hidden" name="idPromotion" value="<?= $key+1 ?>">
                            <button type="submit" name="details_promo" class="btn-primary">Détails</button>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class=" tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <select name="per-page" id="">
                        <option value="" selected>10</option>
                    </select>
                </div>
                <div class="pagination">
                    <span> <?= $range_start+1 ." - ". $range_end ?> of <?= count($promotions )?></span>
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