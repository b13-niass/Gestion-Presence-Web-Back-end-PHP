<?php 
// $referentiels = findAllReferentiel(); 
?>
<div class="right-middle">
    <div class="breadcrumbs">
        <span>Référentiels</span>
        <div>
            <span>Référentiels ></span>
            <span>Liste</span>
        </div>
    </div>
    <div class="content">
        <div class="referentiels">
            <?php
                
                foreach ($referentiels as $referentiel) {
                   if($referentiel['status']):
            ?>
            <div class="item">
                <div class="top">
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="img"></div>
                <div class="bottom">
                    <span><?= $referentiel['libelle'] ?></span>

                    <span class="activer">Active</span>

                </div>
            </div>
            <?php
             endif;
            }
            ?>
        </div>
        <div class="form-referentiels">
            <form action="" method="post">
                <span>Nouveau Référentiel</span>
                <div class="form-input">
                    <span>Libelle</span>
                    <input type="text" name="" id="" placeholder="Entrer le libelle" />
                </div>
                <div class="form-input">
                    <span>Libelle</span>
                    <input type="text" name="" id="" placeholder="Entrer la description" />
                </div>
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
</div>