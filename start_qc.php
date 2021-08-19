<?php
include 'koneksi.php';

$start_qc = $_POST['date_qc'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE qc SET start_qc = '$start_qc', nama_karyawanQC = '$id_karyawan' WHERE no_invoice = '$id_in'");
