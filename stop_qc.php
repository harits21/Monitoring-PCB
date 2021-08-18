<?php
include 'koneksi.php';

$start_qc = $_POST['date_qc'];
$stop_qc = $_POST['date_qc2'];
$sql = mysqli_query($koneksi, "UPDATE qc SET stop_qc = '$stop_qc' WHERE start_qc = '$start_qc'");
