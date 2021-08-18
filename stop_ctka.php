<?php
include 'koneksi.php';

$start_ctka = $_POST['date_ctka'];
$stop_ctka = $_POST['date_ctka2'];
$sql = mysqli_query($koneksi, "UPDATE ctk_jalur_atas SET stop_ctk_atas = '$stop_ctka' WHERE start_ctk_atas = '$start_ctka'");
