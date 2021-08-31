<?php
include 'koneksi.php';

$start_sa = $_POST['date_sa'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_silk_atas = '$start_sa', nama_karyawanSA = '$id_karyawan' WHERE no_invoice = '$id_in'");