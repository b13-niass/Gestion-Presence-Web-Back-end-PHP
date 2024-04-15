<div class="menu-horizontal">
    <div class="burger-toggle">
        <i class=""></i>
        <input type="checkbox" class="cb" name="checkbox-burger" id="checkbox-burger" />
    </div>
    <div class="mh-icon">
        <i class="icon-menu"></i>
    </div>
    <div class="mh-search-bar">
        <form action="" method="POST" style="width: 100%;">
            <input type="text" style="height: 6vh;" name="search_matricule" placeholder="Rechercher ...." id="" />
            <input type="hidden" name="page" value="<?=$uri_?>">
        </form>
    </div>

    <div class="mh-date">
        <i class="fa-regular fa-calendar"></i>20 March 2024
    </div>
    <div class="mh-profil">
        <div class="photo-profil"></div>
        <div class="profil">
            <div class="profil-role"><?= $_SESSION['user_login']['role'] == 1 ? 'Admin' : 'Apprenant' ?></div>
            <!-- <div class="profil-name">
                Admin Admin
                <i class="fa fa-angle-down"></i>
            </div> -->
            <div class="dropdown profil-name">
            <button class="dropbtn">
            <?= $_SESSION['user_login']['nom']." ".$_SESSION['user_login']['prenom']?>
                <i class="fa fa-angle-down"></i>
            </button>
            <form action="/login" method="POST">
                <div class="dropdown-content">
                    <!-- <input type="hidden" name="page" value="login"> -->
                    <button type="submit" name="logout">Logout</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>