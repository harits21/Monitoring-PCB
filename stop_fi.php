<?php
include 'koneksi.php';

$start_fi = $_POST['date_fi'];
$stop_fi = $_POST['date_fi2'];
$sql = mysqli_query($koneksi, "UPDATE finishing SET stop_finishing = '$stop_fi' WHERE start_finishing = '$start_fi'");
