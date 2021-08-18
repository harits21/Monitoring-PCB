<?php
include 'koneksi.php';

$start_ctkb = $_POST['date_ctkb'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO ctk_jalur_bawah (start_ctk_bawah,id_karyawan,no_invoice) VALUES ('$start_ctkb','$id_karyawan','$id_in')");
