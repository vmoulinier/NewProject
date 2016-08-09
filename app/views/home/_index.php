<!DOCTYPE html>
<html lang="en">
<?php include_once '_head.php';
?>
<body>
<?php getinclude("views/home/_nav.php") ?>

<div class="container">
    <div style="padding: 90px 15px; text-align: center;">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="lead">HOME</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
                <?php
                if(is_loggedin_admin()) {
                    echo 'CONNEXION ADMIN';
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
