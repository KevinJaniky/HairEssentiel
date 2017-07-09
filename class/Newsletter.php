<?php

class Newsletter
{
    private $_bdd;
    private $_mail;
    private $_error  = false;

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

    public function setMail($mail) {
        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            return $this->_error = true;
        }
        return $this->_mail = htmlentities($mail);
    }

    public function add() {
        if($this->_error) {
            $_SESSION['flash_news_error'] = " E-mail non conforme";
        }else {
            $_SESSION['flash_news_success'] = "Abonnement réussit";
            $query = $this->_bdd->prepare('INSERT INTO newsletter (mail) VALUES (:mail)');
            $query->execute(['mail'=>$this->_mail]);
        }
    }

}