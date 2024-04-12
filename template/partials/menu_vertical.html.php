<div class="left">
    <label for="checkbox-burger">
        <i class="fa fa-close"></i>
    </label>

    <div class="logo"></div>
    <div>Menu</div>
    <div class="menu-vertical">
        <div class="menu-item">
            <a href="#">
                <i class="dash-icon"></i>
                Dashboard
            </a>
        </div>
        <div class="menu-item">
            <a href="/pro" class="<?= $uri_ == "pro" ? "color-menu-item" : "" ?>">
                <i class="promo-icon <?= $uri_ == "pro" ? "promo-menu-item" : "" ?> "></i>
                Promos
            </a>
        </div>
        <div class="menu-item">
            <a href="/ref" class="<?= $uri_ == "ref" ? "color-menu-item" : "" ?>">
                <i class="ref-icon <?= $uri_ == "ref" ? "ref-menu-item" : "" ?>"></i>
                Réferentiels
            </a>
        </div>
        <div class="menu-item">
            <a href="utilisateur">
                <i class="user-icon"></i>
                Utilisateurs
            </a>
        </div>
        <div class="menu-item">
            <a href="/app" class="<?= $uri_ == "app" ? "color-menu-item" : "" ?>">
                <i class="visit-icon <?= $uri_ == "app" ? "user-menu-item" : "" ?>"></i>
                Visiteurs
            </a>
        </div>
        <div class="menu-item">
            <a href="/pre" class="<?= $uri_ == "pre" ? "color-menu-item" : "" ?>">
                <i class="presence-icon <?= $uri_ == "pre" ? "user-menu-item" : "" ?>"></i>
                Presence
            </a>
        </div>
        <div class="menu-item">
            <a href="evenements">
                <i class="event-icon"></i>
                Evénements
            </a>
        </div>
    </div>
</div>