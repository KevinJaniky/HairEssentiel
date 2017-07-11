<?php

class Horaire {

    private $_bdd;
    private $_matin;
    private $_midi;
    private $_error = '';

    public function __construct()
    {
        require_once 'conf.php';
        try {

            $this->_bdd = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, MDP);
            return $this->_bdd;
        } catch (Exception $e) {
            die("erreur :" . $e->getMessage());
        }
    }

    public function setMatin($h)
    {
        if (strlen($h)<2) {
            return $this->_error .= "Horaire doit etre un nombre";
        }
        return $this->_matin = $h;
    }


    public function setMidi($h)
    {
        if (strlen($h)<2) {
            return $this->_error .= "Horaire doit etre un nombre";
        }
        return $this->_midi = $h;
    }


    public function select() {
        $query =$this->_bdd->query('SELECT * FROM horaire');
        return $query->fetchAll();
    }

    public function selectId($id) {
        $query = $this->_bdd->prepare('SELECT * FROM horaire WHERE id = :id');
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch();
    }

    public function update($id) {
        $query = $this->_bdd->prepare('UPDATE horaire SET matin = :matin , midi =:midi WHERE id=:id');
        $query->execute([
            'matin'=>$this->_matin,
            'midi'=>$this->_midi,
            'id'=>$id
        ]);
    }
}