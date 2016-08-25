<?php
class Produit
{
    private $id;
    private $libelleprod;
    private $prix;
    private $id_cat;

    public function __construct($valeurs = array())
    {
        if(!empty($valeurs))
            $this->hydrate($valeurs);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        $this->id = $var;
    }

    public function getLibelleProd()
    {
        return $this->libelleprod;
    }

    public function setLibelleProd($var)
    {
        $this->libelleprod = $var;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($var)
    {
        $this->prix = $var;
    }

    public function getId_cat()
    {
        return $this->id_cat;
    }

    public function setId_cat($var)
    {
        $this->id_cat = $var;
    }
}

