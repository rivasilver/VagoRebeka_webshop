<?php
if (isset($_SESSION['felhasznalo'])) {
    header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {   
    require_once "models/TermekModel.php";
    $felh_model = new TermekModel();
    $nev = $_POST['nev'];
    $leiras = $_POST['leiras'];
    $ar = $_POST['ar'];
    $kep = $_POST['kep'];
    $helyes_adatok = true;
    if ($ar < 0){
        echo '<div class="alert alert-danger">
            Az ár nem lehet negatív!
            </div>'; 
        $helyes_adatok = false;
    }
    if ($helyes_adatok){
        $felh_model->insert($nev, $leiras, $ar, $kep);
    }
}

include "views/hozzaad.php";