<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$stop_verif = $_POST['date2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_verified SET stop_verif = '$stop_verif' WHERE no_invoice = '$id_in'");
