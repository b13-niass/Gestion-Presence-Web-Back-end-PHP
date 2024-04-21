<?php //dd($_SESSION) ?>
<div class="loginForm">
    <div class="logo"></div>
    <form action="" method="post">
        <div class="champs">
            <span class="items item1" style="display:<?= $error_login['email_pwd_error'] ?>"> l'email ou le mot de passe est incorrecte </span>
            <span class="items item2"> Email Address <span>*</span> </span>
            <div class="items item3">
                <input type="text" name="email" placeholder="Enter email address *" />
            </div>
            <i style="font-size: 0.7rem;color:darkred;display:<?= $error_login['email_required'] ?>">
                    L'email est obligatoire
            </i>
            <i style="font-size: 0.7rem;color:darkred;display:<?= $error_login['email_invalid'] ?>">
                    L'email est invalide
            </i>
            <span class="items item4"> Password <span>*</span> </span>
            <div class="items item5">
                <input type="password" name="password" placeholder="Enter your password *" />
            </div>
            <i style="font-size: 0.7rem;color:darkred;display:<?= $error_login['pwd_required'] ?>">
                Le mot de pass est obligatoire
            </i>
        </div>
        <div class="items item6">
            <input type="checkbox" name="remember" id="" />
            <span>Remember me</span>
        </div>
        <div class="items item7">
            <a href="">Mot de passe Oublié ?</a>
        </div>
        <!-- <input type="hidden" name="page" value="/pro"> -->
        <div class="items item8">
            <button type="submit" name="login">Log In</button>
            <!-- <a href="/pro">Log In</a> -->
        </div>
    </form>
</div>