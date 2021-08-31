<?php
include 'koneksi.php';

$start_ctka = $_POST['date_ctka'];
$stop_ctka = $_POST['date_ctka2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_ctk_atas = '$stop_ctka' WHERE no_invoice = '$id_in'");
