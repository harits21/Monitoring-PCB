<?php
include 'koneksi.php';

$start_bor = $_POST['date_bor'];
$stop_bor = $_POST['date_bor2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_bor = '$stop_bor' WHERE no_invoice = '$id_in'");
