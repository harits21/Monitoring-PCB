<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$stop_verif = $_POST['date2'];
$sql = mysqli_query($koneksi, "UPDATE order_verified SET stop_verif = '$stop_verif' WHERE start_verif = '$start_verif'");

// if (mysqli_query($koneksi, $sql)) {
//     $sql = mysqli_query($koneksi, "UPDATE order_masuk SET id_karyawan = '$_POST[id_karyawan]' WHERE no_invoice = '$_POST[id_in]'");
// }
