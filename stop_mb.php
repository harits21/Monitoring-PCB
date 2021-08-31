<?php
include 'koneksi.php';

$start_mb = $_POST['date_mb'];
$stop_mb = $_POST['date_mb2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_masking_bawah = '$stop_mb' WHERE no_invoice = '$id_in'");
