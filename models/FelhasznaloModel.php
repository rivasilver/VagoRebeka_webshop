<?php 
require_once "models/adatbazis.php";
class FelhasznaloModel {
    public function regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuldatum, $irszam, $varos, $cim)
    {
        $hash = password_hash($jelszo, PASSWORD_DEFAULT);
        $timestamp = date("Y-m-d H:i:s");
        //$szuldatum = strtotime($szuldatum);
        $szuldatum = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $szuldatum)));
        //$szuldatum->format('Y-m-d H:i:s');
        // $sql = "INSERT INTO felhasznalo(felhasznalo_nev, email, jelszo, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim, regisztracio_idopontja)
        // // VALUES ($felhasznalonev,$email,$hash,$teljes_nev,$szuldatum,$irszam,$varos,$cim,$timestamp)";
        // $stmt = $this->conn->prepare($sql);
        // // $stmt->bind_param("ssssiissi", $felhasznalonev, $email, $hash, $teljes_nev, $szuldatum, $irszam, $varos, $cim, $timestamp);
        // $stmt->execute();

        // $mysqli = new mysqli("localhost", "root", "", "webshop");
        // $stmt = mysqli_stmt_init($mysqli);
        // mysqli_stmt_bind_param($stmt, "ssssiissi", $felhasznalonev, $email, $hash, $teljes_nev, $szuldatum, $irszam, $varos, $cim, $timestamp);
        // $stmt->execute();
        
        $conn = mysqli_connect("localhost", "root", "", "webshop");
        $felhnev_ellenorzes = "SELECT * FROM felhasznalo WHERE felhasznalo_nev = '$felhasznalonev'";
        $email_ellenorzes = "SELECT * FROM felhasznalo WHERE email = '$email'";
        $ell1 = mysqli_query($conn,$felhnev_ellenorzes);
        $felh = mysqli_fetch_array($ell1, MYSQLI_NUM);
        $ell2 = mysqli_query($conn,$email_ellenorzes);
        $mail = mysqli_fetch_array($ell2, MYSQLI_NUM);
        $helyes_adatok = true;
        if ($felh[0] > 1){
            echo '<div class="alert alert-danger">
            window.onload = function () { alert("Foglalt felhasználónév!"); } 
            </div>';
            $helyes_adatok = false;
        }
        if  ($mail[0] > 1){
            echo '<div class="alert alert-danger">
            window.onload = function () { alert("Foglalt email cím!"); } 
            </div>';
            $helyes_adatok = false;
        }
        if ($helyes_adatok){
            $sql = "INSERT INTO felhasznalo(felhasznalo_nev, email, jelszo, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim, regisztracio_idopontja) VALUES ('$felhasznalonev','$email','$hash','$teljes_nev','$szuldatum','$irszam','$varos','$cim','$timestamp')";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success">
                Sikeres regisztráció! 
                </div>'; 
            } else {
                echo '<div class="alert alert-danger">Hiba: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
            }
        }
        mysqli_close($conn);
    }

    public function bejelentkezes($felhasznalonev, $jelszo)
    {
        $conn = mysqli_connect("localhost", "root", "", "webshop");
        $sql = "SELECT * FROM felhasznalo
            WHERE felhasznalo_nev = '$felhasznalonev'";
        // $stmt = $this->conn->prepare($sql);
        // $stmt->bind_param("s", $felhasznalonev);
        // $stmt->execute();
        $result = mysqli_query($conn, $sql);



        $felhasznalo = false;

        if ($result->num_rows == 1) {
            $sor = $result->fetch_assoc();
            if (password_verify($jelszo, $sor['jelszo'])) {
               $felhasznalo = $sor;
               //$oldal = "fooldal.php";
            }
        }
        
        return $felhasznalo;
    }
}
//tesztElek1