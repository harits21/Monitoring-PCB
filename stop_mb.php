<?php
include 'koneksi.php';

$start_mb = $_POST['date_mb'];
$stop_mb = $_POST['date_mb2'];
$sql = mysqli_query($koneksi, "UPDATE masking_bawah SET stop_masking_bawah = '$stop_mb' WHERE start_masking_bawah = '$start_mb'");
