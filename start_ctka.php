<?php
include 'koneksi.php';

$start_ctka = $_POST['date_ctka'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO ctk_jalur_atas (start_ctk_atas,id_karyawan,no_invoice) VALUES ('$start_ctka','$id_karyawan','$id_in')");
