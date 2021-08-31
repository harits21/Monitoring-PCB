<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_verif = '$start_verif', nama_karyawanV = '$id_karyawan' WHERE no_invoice = '$id_in'");
