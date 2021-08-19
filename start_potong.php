<?php
include 'koneksi.php';

$start_potong = $_POST['date_p'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE potong_pcb SET start_potong = '$start_potong', nama_karyawanP = '$id_karyawan' WHERE no_invoice = '$id_in'");
