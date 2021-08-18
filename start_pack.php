<?php
include 'koneksi.php';

$start_pack = $_POST['date_pack'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO packing (start_packing,nama_karyawanPCK,no_invoice) VALUES ('$start_pack','$id_karyawan','$id_in')");
