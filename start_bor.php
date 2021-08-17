<?php
include 'koneksi.php';

$start_bor = $_POST['date_bor'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO bor (start_bor,id_karyawan,no_invoice) VALUES ('$start_bor','$id_karyawan','$id_in')");
