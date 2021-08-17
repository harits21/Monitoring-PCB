<?php
include 'koneksi.php';

$start_ma = $_POST['date_ma'];
$stop_ma = $_POST['date_ma2'];
$sql = mysqli_query($koneksi, "UPDATE masking_atas SET stop_masking_atas = '$stop_ma' WHERE start_masking_atas = '$start_ma'");
