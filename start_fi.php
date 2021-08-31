<?php
include 'koneksi.php';

$start_fi = $_POST['date_fi'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_finishing = '$start_fi', nama_karyawanF = '$id_karyawan' WHERE no_invoice = '$id_in'");
