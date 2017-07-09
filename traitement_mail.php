<?php
require_once 'autoload.php';

if(isset($_POST['mail'])) {
    $data = new Newsletter();
    $data->setMail($_POST['mail']);
    $data->add();
    header('location:'. $_SERVER['HTTP_REFERER']);
    die();
}