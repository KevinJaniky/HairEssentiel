<?php

class Blog {

    private $_bdd;
    private $_couverture;
    private $_titre;
    private $_content;

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

    public function selectAll() {
        $query = $this->_bdd->query('SELECT * FROM blog');
        return $query->fetchAll();

    }

    public function selectId($id) {
        $query = $this->_bdd->prepare('SELECT * FROM blog WHERE id = :id');
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch();
    }

    public function selectHome(){
        $query = $this->_bdd->query('SELECT * FROM blog ORDER BY id DESC LIMIT 4');
        return $query->fetchAll();
    }
}