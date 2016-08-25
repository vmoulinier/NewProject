<?php
class Categorie
{
    private $id;
    private $libellecat;

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

    public function getLibelleCat()
    {
        return $this->libellecat;
    }

    public function setLibelleCat($var)
    {
        $this->libellecat = $var;
    }
}

