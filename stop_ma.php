<?php
include 'koneksi.php';

$start_ma = $_POST['date_ma'];
$stop_ma = $_POST['date_ma2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE masking_atas SET stop_masking_atas = '$stop_ma' WHERE no_invoice = '$id_in'");
