<?php
include_once 'db_connect.php';
include_once 'entity/user.php';

if($_POST)
{

    $mail = $_POST['user_email'];
    $user_password = $_POST['password'];
    $mdp = md5($user_password);

    try
    {
        $stmt = $bdd->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
        $stmt->execute(array(":email"=>$mail, ":password"=>$mdp));
        $count = $stmt->rowCount();

        if($count==1){

            $user = new User($mail,$mdp); //création de l'objet
            if($user->login($bdd)) {
                $user->saveSession();
            }
        }
        else{

            echo "1"; //  email existe pas donc pas ok
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
