<?php
include 'koneksi.php';

$start_plat = $_POST['date_plat'];
$stop_plat = $_POST['date_plat2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE plating SET stop_plating = '$stop_plat' WHERE no_invoice = '$id_in'");
