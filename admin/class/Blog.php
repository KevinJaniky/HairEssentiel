<?php

class Blog {

    private $_bdd;
    private $_couverture;
    private $_titre;
    private $_content;
    private $_error = '';

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

    public function setTitre($titre) {
        if(strlen($titre)< 2 && strlen($titre) > 60) {
            return $this->_error  .= 'Titre entre 2 et 60 caratères';
        }
        return $this->_titre = htmlentities($titre);
    }

    public function setContent($content) {
        if(strlen($content)< 150) {
            return $this->_error  .= 'Contenu 150 caractères minimum';
        }
        return $this->_content = $content;
    }

    public function setCouverture($file)
    {
        $extensions_valides = ['jpg', 'jpeg', 'png', 'gif'];

        $name = $file["name"];
        $poids = $file['size'];
        $code = $file['error'];
        $maxsize = 10485760;
        $upload = $_SERVER['DOCUMENT_ROOT']."/media/Articles/";
        $new_name = bin2hex(rand(0, 15220));

        //On récupère l'extension
        $name_exploded = explode(".", $name);
        $extension = strtolower(end($name_exploded));
        $new_name = $new_name . "." . $extension;

        if ($code > 0) {
            switch ($code) {
                case UPLOAD_ERR_INI_SIZE:
                    $msg_error = "Fichier trop lourd selon php.ini";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $msg_error = "Fichier trop lourd selon MAX_FILE_SIZE";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $msg_error = "Upload partiel";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $msg_error = "Aucun fichier";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $msg_error = "Le dossier temporaire n'existe pas";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $msg_error = "Problème de permission";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $msg_error = "Erreur au niveau de l'extension";
                    break;
                default:
                    $msg_error = "Erreur ???";
                    break;
            }
            return $msg_error;
        } //On vérifie que notre extension se trouve dans notre tableau $extensions_valides
        else if (!in_array($extension, $extensions_valides)) {
            return "Extension invalide : ( 'jpg' , 'jpeg' , 'png', 'gif' )";
        } //Notre extension est donc ok, on vérifie maintenant le poids de l'image
        else if ($poids > $maxsize) {
            return "Fichier trop lourd (" . $poids . "/" . $maxsize . "octets)";
        }
        $resultat = move_uploaded_file($file['tmp_name'], $upload . $new_name);
        if (!$resultat) {

            return $this->_error = 'Erreur Couverture';
        }
        return $this->_couverture = '/media/Articles/'.$new_name;
    }
    public function updateCouverture($id) {
        if(!empty($this->_error))
            $_SESSION['flash_error'] = "Une erreur est survenue";
        else {
            $query = $this->_bdd->prepare('UPDATE blog SET couverture = :couverture WHERE id = :id');
            $query->execute([
                'couverture'=>$this->_couverture,
                'id'=>$id
            ]);
        }
    }

    public function add(){
        if(empty($this->_error)) {
            $query = $this->_bdd->prepare('INSERT INTO blog(titre,couverture,content) VALUES (:titre,:couverture,:content)');
            $query->execute([
                'titre'=>$this->_titre,
                'couverture'=>$this->_couverture,
                'content'=>$this->_content
            ]);
        }else {
            return $this->_error;
        }
    }

    public function update($id){
        $query = $this->_bdd->prepare('UPDATE blog SET titre =:titre, content = :content WHERE id =:id');
        $query->execute(['titre'=>$this->_titre,'content'=>$this->_content,'id'=>$id]);
    }
    public function delete($id){
        $this->_bdd->query('DELETE FROM blog WHERE id ='.$id);
    }
}