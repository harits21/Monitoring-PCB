<?php
include 'koneksi.php';

$start_sb = $_POST['date_sb'];
$stop_sb = $_POST['date_sb2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasiSB'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_silk_bawah = '$stop_sb', durasiSB = '$durasi' WHERE no_invoice = '$id_in'");
