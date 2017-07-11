<?php

require_once 'autoload.php';

if(isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_POST['id']) {
    $data = new Newsletter();
    $data->delete($_POST['id']);
}