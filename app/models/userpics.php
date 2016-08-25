<?php
include_once 'db_connect.php';
include_once 'functions.php';

if(isset($_FILES['avatar'])) {

    $dossier = 'C:/wamp/www/appmvc/public/images/userpics/'.$_SESSION['user']->getMail();
    $fichier = basename($_FILES['avatar']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['avatar']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');
//Début des vérifications de sécurité...
    if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros...';
    }
    if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
        //On formate le nom du fichier ici...
        $fichier = strtr($fichier,
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            $id = $_SESSION['user']->getId();
            $file = $_SESSION['user']->getMail() . $fichier;
            $stmt = $bdd->prepare("UPDATE user SET img = :file WHERE id = :id");
            $stmt->bindParam(":file",$file);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $erreur = 'Image enregistrée';

        } else //Sinon (la fonction renvoie FALSE).
        {
            $erreur = 'Erreur lors de l\'upload..';
        }
    }

    setcookie("erreur", $erreur, time()+3);
    redirect("home/profile");
}