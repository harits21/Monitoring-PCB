<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO order_verified (start_verif,id_karyawan,no_invoice) VALUES ('$start_verif','$id_karyawan','$id_in')");
