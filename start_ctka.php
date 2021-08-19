<?php
include 'koneksi.php';

$start_ctka = $_POST['date_ctka'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE ctk_jalur_atas SET start_ctk_atas = '$start_ctka', nama_karyawanCA = '$id_karyawan' WHERE no_invoice = '$id_in'");
