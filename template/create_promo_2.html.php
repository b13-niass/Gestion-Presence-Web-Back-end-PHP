
<div class="right-middle">
    <div class="breadcrumbs">
        <span>Promotions</span>
        <div>
            <span>Promos ></span>
            <span>Creation</span>
        </div>
    </div>
    <div class="content">
        <div class="content-left">
            <div><i class="fa fa-pencil"></i></div>
            <div></div>
            <div>2</div>
        </div>
        <div class="content-right">
            
            <div class="cr-top">
                <span>Promotion</span>
                <span>Référentiels</span>
            </div>
            <div class="cr-bottom">
            <form action="" method="post">
                <span>Sélectionner un ou plusieur référentiel(s)</span>
                <?php 
                    foreach($promoReferentiels as $pf):
                ?>
                <div class="checkbox-input">
                    <input type="checkbox" <?= if_ref_exist_apprenant($la_promo, $pf) ? 'disabled' : '' ?> value="<?= $pf['id'] ?>" checked name="referentiels[]" id="" />
                    <?= $pf['libelle'] ?>
                </div>
                    <?php endforeach; 
                        foreach($diffPromoReff as $diffP):
                    ?>

                <div class="checkbox-input">
                    <input type="checkbox" value="<?= $diffP['id'] ?>" name="referentiels[]" id="" />
                    <?= $diffP['libelle'] ?>
                </div>

                    <?php endforeach;  ?>
                <div>
                    <a href="/create-pro1">Back</a>
                    <button type="submit" name="create_promo">Créer</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
