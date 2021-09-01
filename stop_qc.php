<?php
include 'koneksi.php';

$start_qc = $_POST['date_qc'];
$stop_qc = $_POST['date_qc2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasiQC'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_qc = '$stop_qc', durasiQC = '$durasi' WHERE no_invoice = '$id_in'");
