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

include_once 'entity/manager.php';
include_once 'entity/user.php';
include_once 'C:/wamp/www/appmvc/app/models/functions.php';
$manager = new Manager($bdd);
session_start();