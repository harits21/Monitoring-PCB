<?php
include 'koneksi.php';

$start_pack = $_POST['date_pack'];
$stop_pack = $_POST['date_pack2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE packing SET stop_packing = '$stop_pack' WHERE no_invoice = '$id_in'");
