<?php
include 'koneksi.php';

$start_sa = $_POST['date_sa'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO silkscreen_atas (start_silk_atas,nama_karyawanSA,no_invoice) VALUES ('$start_sa','$id_karyawan','$id_in')");
