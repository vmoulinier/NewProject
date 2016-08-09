<?php
class User
{
    private $mail;
    private $mdp;
    private $id;
    private $img;
    private $usertype;

    public function __construct($mail, $mdp) {
        $this->setMail($mail);
        $this->setMdp($mdp);
    }

    public function login($bdd) {
        $requser = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        $requser->execute(array($this->mail, $this->mdp));
        $userexist = $requser->rowcount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $id = $userinfo['id'];
            $this->setId($id);
            $img = $userinfo['img'];
            $this->setImg($img);
            $usertype = $userinfo['usertype'];
            $this->setUsertype($usertype);
            return true;
        } else {
            return false;
        }
    }

    public function saveSession() {
        $_SESSION['user'] = $this;
    }

    /**
     * accesseurs
     */

    //GET

    public function getMail(){
        return $this->mail;
    }

    public function getMdp(){
        return $this->mdp;
    }

    public function getId(){
        return $this->id;
    }

    public function getImg(){
        return $this->img;
    }

    public function getUsertype() {
        return $this->usertype;
    }

    //SET

    public function setMail($var){
        $this->mail = $var;
    }

    public function setMdp($var){
        $this->mdp = $var;
    }

    public function setId($var){
        $this->id = $var;
    }

    public function setImg($var){
        $this->img = $var;
    }

    public function setUsertype($var){
        $this->usertype = $var;
    }


}