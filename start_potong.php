<?php
include 'koneksi.php';

$start_potong = $_POST['date_p'];
$id_karyawan = $_POST['id_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "INSERT INTO potong_pcb (start_potong,id_karyawan,no_invoice) VALUES ('$start_potong','$id_karyawan','$id_in')");
