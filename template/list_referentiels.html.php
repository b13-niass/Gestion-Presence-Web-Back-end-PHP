
<div class="right-middle">
    <div class="breadcrumbs">
        <div>Référentiels : 
        <a href="/pro" style="text-decoration: none; color:#009186;font-weight: bold;">
            <span>
                Promotion <?= $promotion_active != 0 ? $promotion_active : '_ _'  ?>
            </span>
        </a>
    </div>
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
            <form action="/ref" method="post" enctype="multipart/form-data">
                <span>Nouveau Référentiel</span>
                <div class="form-input">
                    <span>Libelle</span>
                    <input type="text" name="libelle" id="" placeholder="Entrer le libelle" />
                </div>
                <div class="form-input">
                    <span>Description</span>
                    <input type="text" name="desc" id="" placeholder="Entrer la description" />
                </div>
                <div class="form-input-file">
                    <span>Ajouter Image</span>
                    <input type="file" name="image_referentiel" id="fileInput" id=""/>
                </div>
                <div class="form-input-file input-switch">
                <label class="switch">
                    <input type="checkbox" value="<?= $_SESSION['promotion_active'] ?>" name="promo_to_ref">
                    <span class="slider round"></span>
                </label>
                <span style="font-size:0.7rem;" class="switch-text">Ajouter à la promo active</span>
                </div>
                <button type="submit" name="add_new_referentiel">Enregistrer</button>
                <?php if($error_add_referentiels == 0){ ?>
                <span style="color: darkred;font-size: 0.6rem;text-align: center;padding-top: 1px;">erreur lors de l'ajout</span>
                    <?php }?>
                       
            </form>
        </div>
    </div>
</div>