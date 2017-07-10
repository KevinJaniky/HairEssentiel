<?php

class Team {




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
}