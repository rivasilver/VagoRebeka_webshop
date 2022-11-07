<?php 
if (isset($_SESSION['felhasznalo'])) {
    header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {   
    require_once "models/FelhasznaloModel.php";
    $felh_model = new FelhasznaloModel();
    $felhasznalonev = $_POST['felhasznalonev'];
    $email = $_POST['email'];
    $jelszo = $_POST['jelszo'];
    $teljes_nev = $_POST['teljes_nev'];
    $szuldatum = $_POST['szuldatum'];
    $irszam = $_POST['irszam'];
    $varos = $_POST['varos'];
    $cim = $_POST['cim'];
    $felh_model->regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuldatum, $irszam, $varos, $cim);
}

include "views/regisztracio.php";