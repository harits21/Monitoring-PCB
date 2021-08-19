<?php
include 'koneksi.php';

$start_bor = $_POST['date_bor'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE bor SET start_bor = '$start_bor', nama_karyawanB = '$id_karyawan' WHERE no_invoice = '$id_in'");
