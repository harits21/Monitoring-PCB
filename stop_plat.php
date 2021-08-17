<?php
include 'koneksi.php';

$start_plat = $_POST['date_plat'];
$stop_plat = $_POST['date_plat2'];
$sql = mysqli_query($koneksi, "UPDATE plating SET stop_plating = '$stop_plat' WHERE start_plating = '$start_plat'");
