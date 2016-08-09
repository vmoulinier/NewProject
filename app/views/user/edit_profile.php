<!DOCTYPE html>
<html lang="en">
<?php
include_once 'C:/wamp/www/appmvc/app/views/home/_head.php';
if(is_loggedin()== false) {
    redirect("home/index");
}
?>
<body>
<?php getinclude("views/home/_nav.php") ?>


<div class="container">
    <div style="padding: 90px 15px;">
        <div class="row">
            <div class="col-sm-12">

                <h1 class="lead">PROFILE</h1>
                <?php
                var_dump($_SESSION['user']);
                $user = new User($_SESSION['user']->getMail(),$_SESSION['user']->getMdp()); //création de l'objet
                if($user->login($bdd) == true) {
                    $user->saveSession();
                }
                if ($_SESSION['user']->getImg())
                {
                    echo "<img src='../images/userpics/".$_SESSION['user']->getImg()."' width=150> ";
                }
                else
                {
                    echo 'pas images';
                }
                include_once 'C:/wamp/www/appmvc/app/views/form/userpics.php';
                if (isset($_COOKIE["erreur"])){
                    echo '<p class="bg-success error-info"> &nbsp;'.$_COOKIE["erreur"].'</p>';
                }

                ?>

            </div>

            <div class="col-sm-12">

            </div>
        </div>
    </div>
</div>
</body>
</html>

