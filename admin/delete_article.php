<?php

require_once 'autoload.php';

if(isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_POST['id']) {
    $data = new Blog();
    $data->delete($_POST['id']);
}