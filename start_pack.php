<?php
include 'koneksi.php';

$start_pack = $_POST['date_pack'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_packing = '$start_pack', nama_karyawanPCK = '$id_karyawan' WHERE no_invoice = '$id_in'");
