<?php
include 'koneksi.php';

$start_sa = $_POST['date_sa'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO silkscreen_atas (start_silk_atas,id_karyawan,no_invoice) VALUES ('$start_sa','$id_karyawan','$id_in')");
