<?php

include_once 'db_connect.php';

if($_POST)
{

    $user_email = $_POST['user_email'];
    $user_password = $_POST['password'];
    $cuser_password = $_POST['cpassword'];

    $password = md5($user_password);
    $cpassword = md5($cuser_password);

    if($password != $cpassword) {
        echo "Mots de passe différents !";
    }
    else {

        try {

            $stmt = $bdd->prepare("SELECT * FROM user WHERE email=:email");
            $stmt->execute(array(":email" => $user_email));
            $count = $stmt->rowCount();

            if ($count == 0) {

                $stmt = $bdd->prepare("INSERT INTO user (email,password) VALUES(:email, :pass)");
                $stmt->bindParam(":email", $user_email);
                $stmt->bindParam(":pass", $password);

                if ($stmt->execute()) {
                    echo "registered";
                } else {
                    echo "Query could not execute !";
                }

            } else {

                echo "1"; //  not available
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
