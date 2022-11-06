<?php 
session_start();
$controller = "";
$oldal = "termeklista.php";
if (!isset($_GET['oldal'])) {
    $controller = "controllers/termeklista.php";
} else {
    $oldal = $_GET['oldal'];
    if (file_exists("controllers/$oldal.php")) {
        $controller = "controllers/$oldal.php";
    } else {
        $controller = "controllers/errors/404.php";
    }
}
include "views/fooldal.php";