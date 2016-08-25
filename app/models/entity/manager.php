<?php

class Manager
{
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function selectuser()
    {
        $id = $_SESSION['user']->getId();
        $stmt = $this->bdd->prepare("SELECT * FROM user WHERE id=:id");
        $stmt->execute(array(":id"=>$id));
    }

    public function getproduit()
    {
        $q = $this->bdd->query("SELECT * FROM produit");
        $getproduit = $q->fetchAll();
        return $getproduit;
    }

    public function getcategorie()
    {
        $q = $this->bdd->query("SELECT * FROM categorie");
        $getcategorie = $q->fetchAll();
        return $getcategorie;
    }

}