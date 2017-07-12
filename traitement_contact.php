<?php
require_once 'autoload.php';

if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['obj']) && isset($_POST['msg'])) {
    $data = new Email();

    $data->setNom($_POST['nom']);
    $data->setMail($_POST['mail']);
    $data->setObj($_POST['obj']);
    $data->setMessage($_POST['msg']);
    $data->sendMail();

    header('location:/Contact');
    die();

}