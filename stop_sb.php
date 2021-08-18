<?php
include 'koneksi.php';

$start_sb = $_POST['date_sb'];
$stop_sb = $_POST['date_sb2'];
$sql = mysqli_query($koneksi, "UPDATE silkscreen_bawah SET stop_silk_bawah = '$stop_sb' WHERE start_silk_bawah = '$start_sb'");
