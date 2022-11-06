<?php 
require_once "models/TermekModel.php";
$termek_model = new TermekModel();
$termekek = $termek_model->select_all();
include "views/termeklista.php";
?>