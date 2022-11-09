<?php 
//require_once "models/adatbazis.php";
class TermekModel {
    public function select_all()
    {
        $conn = new mysqli("localhost", "root", "", "webshop");
        $sql = "SELECT * FROM termek";
        $result = mysqli_query($conn,$sql);
        return $result->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
    }

    public function hozzaad($nev, $leiras, $ar, $kep)
    {
        $conn = new mysqli("localhost", "root", "", "webshop");
        $nev_ellenorzes = "SELECT * FROM termek WHERE nev = '$nev'";
        $ell = mysqli_query($conn,$felhnev_ellenorzes);
        $helyes_adatok = true;
        if ($ell[0] > 1){
            echo '<div class="alert alert-danger">
            Ilyen nevű termék már van az adatbázisban!"
            </div>';
            $helyes_adatok = false;
        }
        if ($helyes_adatok){
            $sql = "INSERT INTO termek(nev, leiras, ar, kep) VALUES ('$nev','$leiras','$ar','$kep')";
            if (mysqli_query($conn,$sql)){
                echo '<div class="alert alert-success">
                Sikeres termékfelvétel! 
                </div>'; 
        }
        }
        mysqli_close($conn);
    }
}