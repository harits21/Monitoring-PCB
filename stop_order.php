<?php
include 'koneksi.php';

$start_verif = $_POST['date'];
$stop_verif = $_POST['date2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasi_v'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_verif = '$stop_verif', durasiV = '$durasi' WHERE no_invoice = '$id_in'");
