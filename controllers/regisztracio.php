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
    $helyes_adatok = true;
    $kisbetu = preg_match('@[A-Z]@', $jelszo);
    $nagybetu = preg_match('@[a-z]@', $jelszo);
    $szam = preg_match('@[0-9]@', $jelszo);
    if (strlen($jelszo) < 8 || !$kisbetu || !$nagybetu || !$szam){
        echo '<div class="alert alert-danger">
            Nem megfelelő jelszó! Tartalmaznia kell kisbetűt, nagybetűt, számot, és min. 8 karakter hosszúságú legyen! 
            </div>'; 
        $helyes_adatok = false;
    }
    if ($szuldatum > date("Y-m-d H:i:s")){
        echo '<div class="alert alert-danger">
            Nem megfelelő születési dátum!
            </div>'; 
        $helyes_adatok = false;
    }
    if ($helyes_adatok){
        $felh_model->regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuldatum, $irszam, $varos, $cim);
    }
}

include "views/regisztracio.php";