<?php
include 'koneksi.php';

$start_mb = $_POST['date_mb'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_masking_bawah = '$start_mb', nama_karyawanMB = '$id_karyawan' WHERE no_invoice = '$id_in'");
