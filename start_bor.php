<?php
include 'koneksi.php';

$start_bor = $_POST['date_bor'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO bor (start_bor,nama_karyawanB,no_invoice) VALUES ('$start_bor','$id_karyawan','$id_in')");
