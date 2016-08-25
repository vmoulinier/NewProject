<nav class="navbar navbar-inverse navbar-fixed-top nav-padding">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">AppMvc</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index">Accueil</a></li>
                <?php
                if(is_loggedin())
                {
                    echo '<li><a class="cd-signin" href="profile">Profil</a></li>';
//                    echo '<li style="background: url(\'../images/userpics/vmoulinier33@gmail.com294135-2565622142842-1805366561-n.jpg\')0px 15px; background-size: 100%; background-repeat: no-repeat; width:25px; height: 35px;"><a href="profile"> .</a></li>';
                }
                if(is_loggedin_admin())
                {
                    echo '<li><a class="cd-signin" href="profile">Admin</a></li>';
//                    echo '<li style="background: url(\'../images/userpics/vmoulinier33@gmail.com294135-2565622142842-1805366561-n.jpg\')0px 15px; background-size: 100%; background-repeat: no-repeat; width:25px; height: 35px;"><a href="profile"> .</a></li>';
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(is_loggedin())
                {
                    echo '<li><a class="cd-signin" href="logout"><button class="btn btn-primary">Deconnexion</button></a></li>';
                }
                else
                {
                    echo '<li class="main-nav "><a class="cd-signin" href="#0"><button class="btn btn-primary">Connexion</button></a></li>';
                }
                ?>

            </ul>
        </div>
    </div>
</nav>
    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Connexion</a></li>
                <li><a href="#0">Créer un compte</a></li>
            </ul>
            <div id="cd-login">
                <?php getinclude("views/form/login.php") ?>
            </div>

            <div id="cd-signup">
                <?php getinclude("views/form/register.php") ?>
            </div>

            <a href="#0" class="cd-close-form">Close</a>
        </div>
    </div>

