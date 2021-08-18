<?php
include 'koneksi.php';

$start_pack = $_POST['date_pack'];
$stop_pack = $_POST['date_pack2'];
$sql = mysqli_query($koneksi, "UPDATE packing SET stop_packing = '$stop_pack' WHERE start_packing = '$start_pack'");
