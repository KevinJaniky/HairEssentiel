<?php

class Proverbe
{

    private $_bdd;
    private $_author;
    private $_content;
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
        if (strlen($content) < 10 && strlen($content) > 250) {
            return $this->_error = "Content trop court";
        }
        return $this->_content = $content;
    }

    public function setAuthor($auteur)
    {
        if (empty($auteur)) {
            return $this->_author = "Anonyme";
        }
        return $this->_author = htmlentities($auteur);
    }

    public function add()
    {
        if (empty($this->_error)) {
            echo 'Error';
        } else {
            $query = $this->_bdd->prepare('INSERT INTO proverbe(content,auteur) VALUES (:content,:auteur)');
            $query->execute([
                'content' => $this->_content,
                'auteur' => $this->_author
            ]);
        }
    }

    public function delete($id)
    {
        $this->_bdd->query('DELETE FROM proverbe WHERE id = '.$id);
    }

    public function select() {
        $query =$this->_bdd->query('SELECT * FROM proverbe');
        return $query->fetchAll();
    }
}