<?php
include 'koneksi.php';

$start_plat = $_POST['date_plat'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO plating (start_plating,nama_karyawanPLT,no_invoice) VALUES ('$start_plat','$id_karyawan','$id_in')");
