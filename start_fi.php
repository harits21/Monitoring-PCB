<?php
include 'koneksi.php';

$start_fi = $_POST['date_fi'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO finishing (start_finishing,nama_karyawanF,no_invoice) VALUES ('$start_fi','$id_karyawan','$id_in')");
