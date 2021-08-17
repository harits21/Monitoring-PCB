<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$stop_verif = $_POST['date2'];
$sql = mysqli_query($koneksi, "UPDATE order_verified SET stop_verif = '$stop_verif' WHERE start_verif = '$start_verif'");
