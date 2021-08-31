<?php
include 'koneksi.php';

$start_sa = $_POST['date_sa'];
$stop_sa = $_POST['date_sa2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_silk_atas = '$stop_sa' WHERE no_invoice = '$id_in'");
