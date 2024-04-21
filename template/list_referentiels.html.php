
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
    
        <div class="breadcrumbs filtre-referentiel">
            <form action="" method="post">
                <select name="ref_promotion">
                    <option>Promotion 6</option>
                </select>  
                <select name="ref_affectation">
                    <option>Affecter</option>
                    <option>Non affecter</option>
                </select> 
                <select name="ref_etat">
                    <option>Activer</option>
                    <option>Désactiver</option>
                </select>
                <input type="submit" name="ref_all" value="All">
            </form>
            <div>
                
                
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
                <div class="img"> 
                    <img style="width: 100%;max-width: 100%; height: 104%;" src="data:image/jpeg;base64,<?= getRefImageCode($referentiel['id']) ?>" alt="" srcset="">
                </div>
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
                <i style="font-size: 0.7rem;color:darkred;display:<?= $error_add_referentiels['libelle'] ?>">
                    Le libelle es obligatoire
                </i>
                <div class="form-input">
                    <span>Description</span>
                    <input type="text" name="desc" id="" placeholder="Entrer la description" />
                </div>
                <i style="font-size: 0.7rem;color:darkred;display:<?= $error_add_referentiels['desc'] ?>">
                    La description est obligatoire
                </i>
                <div class="form-input-file">
                    <span>Ajouter Image</span>
                    <input type="file" name="image_referentiel"id="fileInput" id=""/>
                    <img id="previewimg" src="/projet/public/img/ref.jpg" width="30%" height="60%" alt="" style="margin: 1% 0;border-radius:5px;">
                </div>
                <i style="font-size: 0.7rem;color:darkred;display:<?= $error_add_referentiels['image'] ?>">
                    L'image  n'est pas valide [jpg, jpeg, png]
                </i>
                <div class="form-input input-switch">
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
        <div class=" tableau-footer">
                <div class="per-page">
                    <span>Items per page</span>
                    <form action="" method="POST">
                        <input type="hidden" name="page" value="/ref">
                        <select name="per_page_app" onchange="this.form.submit()" id="">
                            <option value="5" <?= $per_page == 5 ? 'selected' : '' ?>>5</option>
                            <option value="10" <?= $per_page == 10 ? 'selected' : '' ?>>10</option>
                            <option value="15" <?= $per_page == 15 ? 'selected' : '' ?>>15</option>
                        </select>
                    </form>
                </div>
                <?php 
                    genererPaginationTemplate($uri_, $current_page, $nbrPage,$per_page, $referentiels);
                ?>
            </div>
    </div>
    
</div>

<script>

    fileInput.onchange = evt => {
    const [file] = fileInput.files
    if (file) {
        previewimg.src = URL.createObjectURL(file)
    }
    }

</script>