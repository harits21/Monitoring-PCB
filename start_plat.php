<?php
include 'koneksi.php';

$start_plat = $_POST['date_plat'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE plating SET start_plating = '$start_plat', nama_karyawanPLT = '$id_karyawan' WHERE no_invoice = '$id_in'");
