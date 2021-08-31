<?php
include 'koneksi.php';

$start_ma = $_POST['date_ma'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET start_masking_atas = '$start_ma', nama_karyawanMA = '$id_karyawan' WHERE no_invoice = '$id_in'");
