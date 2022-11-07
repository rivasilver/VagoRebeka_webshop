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
        $sql = "INSERT INTO felhasznalo(felhasznalo_nev, email, jelszo, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim, regisztracio_idopontja) VALUES ('$felhasznalonev','$email','$hash','$teljes_nev','$szuldatum','$irszam','$varos','$cim','$timestamp')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    // public function bejelentkezes($felhasznalonev, $jelszo)
    // {
    //     $sql = "SELECT * FROM felhasznalok
    //         WHERE felhasznalonev = ?";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bind_param("s", $felhasznalonev);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    //     $felhasznalo = false;

    //     if ($result->num_rows == 1) {
    //         $sor = $result->fetch_assoc();
    //         if (password_verify($jelszo, $sor['password'])) {
    //            $felhasznalo = $sor;
    //         }
    //     }
        
    //     return $felhasznalo;
    // }
}