<?php

class Horaire {

    private $_bdd;

    public function __construct()
    {
        require_once 'conf.php';
        try {

            $this->_bdd = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, MDP);
            return $this->_bdd;
        } catch (Exception $e) {
            die("erreur :" . $e->getMessage());
        }
    }

    public function select() {
        $query = $this->_bdd->query('SELECT * FROM horaire');
        return $query->fetchAll();
    }
}