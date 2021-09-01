<?php
include 'koneksi.php';

$start_fi = $_POST['date_fi'];
$stop_fi = $_POST['date_fi2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasiF'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_finishing = '$stop_fi', durasiF = '$durasi' WHERE no_invoice = '$id_in'");
