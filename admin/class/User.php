<?php

class User {

    private $_bdd;
    private $_id;
    private $_mdp;
    private $_error = false;
    private $_data;

    public function __construct()
    {
        require_once '../conf.php';
        try {

            $this->_bdd = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, MDP);
            return $this->_bdd;
        } catch (Exception $e) {
            die("erreur :" . $e->getMessage());
        }
    }

    public function setId($identifiant){
        if(strlen($identifiant) >= 5)
            return $this->_id = htmlentities($identifiant);
        return $this->_error = true;
    }

    public function setMdp($mdp){
        if(strlen($mdp) <6 ){
            return $this->_error = true;
        }
        return $this->_mdp = $mdp;
    }

    public function verifUser() {
        $query = $this->_bdd->prepare('SELECT * FROM user WHERE identifiant = :id AND mdp = :mdp');
        $query->execute(['id'=>$this->_id,'mdp'=>$this->_mdp]);
        $data = $query->fetch();

        if(empty($data)){
            return $this->_error = true;
        }else {
            return $this->_data = $data;
        }
    }

    public function createSession(){
        if($this->_error){
            return false;
        }else{
            $_SESSION['identifiant'] = $this->_data['identifiant'];
            $_SESSION['mdp'] = $this->_data['mdp'];
            $_SESSION['admin'] = true;
            return true;
        }
    }

}