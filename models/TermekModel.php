<?php 
require_once "models/adatbazis.php";
class TermekModel extends Adatbazis {
    public function select_all()
    {
        $sql = "SELECT * FROM termek";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // public function insert($nev, $leiras, $ar, $kep)
    // {
    //     $sql = "INSERT INTO termek(nev, leiras, ar, kep) VALUES (?, ?, ?)";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bind_param("ssi", $nev, $leiras, $ar, $kep);
    //     $stmt->execute();
    //     return $stmt->insert_id;
    // }
}