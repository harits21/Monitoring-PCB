<?php
include 'koneksi.php';

$start_bor = $_POST['date_bor'];
$stop_bor = $_POST['date_bor2'];
$sql = mysqli_query($koneksi, "UPDATE bor SET stop_bor = '$stop_bor' WHERE start_bor = '$start_bor'");
