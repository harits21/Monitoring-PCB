<?php
include 'koneksi.php';

$start_mb = $_POST['date_mb'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO masking_bawah (start_masking_bawah,id_karyawan,no_invoice) VALUES ('$start_mb','$id_karyawan','$id_in')");
