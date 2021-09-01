<?php
include 'koneksi.php';

$start_potong = $_POST['date_p'];
$stop_potong = $_POST['date_potong2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasiP'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_potong = '$stop_potong', durasiP = '$durasi' WHERE no_invoice = '$id_in'");
