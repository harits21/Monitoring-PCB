<?php
include 'koneksi.php';

$start_ctkb = $_POST['date_ctkb'];
$id_karyawan = $_POST['nama_karyawan'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE ctk_jalur_bawah SET start_ctk_bawah = '$start_ctkb', nama_karyawanCB = '$id_karyawan' WHERE no_invoice = '$id_in'");
