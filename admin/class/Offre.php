<?php

class Offre
{
    private $_bdd;
    private $_prix;
    private $_content;
    private $_to;
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

    public function setContent($content)
    {
        if (strlen($content) < 2 && strlen($content) > 200) {
            return $this->_error .= "Content trop court";
        }
        return $this->_content = htmlentities($content);
    }

    public function setPrix($prix)
    {
        if (!is_numeric($prix)) {
            return $this->_error .= "Prix faux";
        }
        return $this->_prix = $prix;
    }

    public function convert($val)
    {
        if ($val == 'on') {
            return 1;
        }
        return 0;
    }

    public function setTo($to)
    {
        if ($to != 0 && $to != 1) {
            return $this->_error = 'Valeur erronée';
        }
        return $this->_to = $this->convert($to);
    }

    public function select()
    {
        $query = $this->_bdd->query('SELECT * FROM price');
        return $query->fetchAll();
    }

    public function selectId($id)
    {
        $query = $this->_bdd->query('SELECT * FROM price WHERE id =' . $id);
        return $query->fetch();
    }

    public function update($id)
    {
        $query = $this->_bdd->prepare('UPDATE price SET prix = :prix, content = :content, partir =:partir WHERE id =:id');
        $query->execute([
            'prix' => $this->_prix,
            'content' => $this->_content,
            'partir' => $this->_to,
            'id' => $id
        ]);
    }

    public function delete($id)
    {
        $this->_bdd->query('DELETE FROM price WHERE id = ' . $id);
    }

    public function add()
    {
        $query = $this->_bdd->prepare('INSERT INTO price (prix,content,partir) VALUES(:prix,:content,:partir)');
        $query->execute([
            'prix' => $this->_prix,
            'content' => $this->_content,
            'partir' => $this->_to
        ]);
    }
}