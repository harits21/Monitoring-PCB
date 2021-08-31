<?php
include 'koneksi.php';

$start_fi = $_POST['date_fi'];
$stop_fi = $_POST['date_fi2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_finishing = '$stop_fi' WHERE no_invoice = '$id_in'");
