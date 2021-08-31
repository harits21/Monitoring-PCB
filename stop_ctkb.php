<?php
include 'koneksi.php';

$start_ctkb = $_POST['date_ctkb'];
$stop_ctkb = $_POST['date_ctkb2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_ctk_bawah = '$stop_ctkb' WHERE no_invoice = '$id_in'");
