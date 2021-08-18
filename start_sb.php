<?php
include 'koneksi.php';

$start_sb = $_POST['date_sb'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO silkscreen_bawah (start_silk_bawah,nama_karyawanSB,no_invoice) VALUES ('$start_sb','$id_karyawan','$id_in')");
