<?php
include 'koneksi.php';

$start_qc = $_POST['date_qc'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO qc (start_qc,nama_karyawanQC,no_invoice) VALUES ('$start_qc','$id_karyawan','$id_in')");
