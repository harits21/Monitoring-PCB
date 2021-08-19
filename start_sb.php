<?php
include 'koneksi.php';

$start_sb = $_POST['date_sb'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE silkscreen_bawah SET start_silk_bawah = '$start_sb', nama_karyawanSB = '$id_karyawan' WHERE no_invoice = '$id_in'");
