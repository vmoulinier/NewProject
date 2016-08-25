<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=appmvc;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

require_once 'entity/manager.php';
require_once 'entity/user.php';
require_once 'entity/produit.php';
require_once 'entity/categorie.php';
$manager = new Manager($bdd);
session_start();