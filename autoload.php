<?php
session_start();

function __autoload($classname) {
require_once "class/".$classname.'.php';
}
