<?php

class Proverbe {

    private $_bdd;
    private $_content;
    private $_author;

    public function __construct()
    {
        require_once 'conf.php';
        try {

            $this->_bdd = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, MDP);
            $this->_bdd->exec("SET NAMES 'UTF8'");
            return $this->_bdd;
        } catch (Exception $e) {
            die("erreur :" . $e->getMessage());
        }
    }


    public function count() {
        $query = $this->_bdd->query('SELECT COUNT(*) as max FROM proverbe ');
        $data = $query->fetch();
        return $data['max'];
    }

    public function alea() {
        return rand(1,$this->count());
    }

    public function contentProverbe() {
        $query = $this->_bdd->prepare('SELECT * FROM proverbe WHERE id = :id');
        $query->execute([
            'id'=>$this->alea()
        ]);
        return $query->fetch();
    }

}