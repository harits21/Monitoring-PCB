<?php
include 'koneksi.php';

$start_sa = $_POST['date_sa'];
$stop_sa = $_POST['date_sa2'];
$sql = mysqli_query($koneksi, "UPDATE silkscreen_atas SET stop_silk_atas = '$stop_sa' WHERE start_silk_atas = '$start_sa'");
