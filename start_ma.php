<?php
include 'koneksi.php';

$start_ma = $_POST['date_ma'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO masking_atas (start_masking_atas,nama_karyawanMA,no_invoice) VALUES ('$start_ma','$id_karyawan','$id_in')");
