<?php 
if (isset($_SESSION['felhasznalo'])) {
    header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];
    require_once "models/FelhasznaloModel.php";
    $model = new FelhasznaloModel();
    $felhasznalo = $model->bejelentkezes($felhasznalonev, $jelszo);
    if ($felhasznalo) {
        unset($felhasznalo['password']);
        $_SESSION['felhasznalo'] = $felhasznalo;
        header("Location: /");
    } else {
        echo '<div class="alert alert-danger">
            Hibás felhasználónév vagy jelszó!
            </div>';
    }
}

include "views/bejelentkezes.php";