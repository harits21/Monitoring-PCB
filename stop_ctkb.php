<?php
include 'koneksi.php';

$start_ctkb = $_POST['date_ctkb'];
$stop_ctkb = $_POST['date_ctkb2'];
$sql = mysqli_query($koneksi, "UPDATE ctk_jalur_bawah SET stop_ctk_bawah = '$stop_ctkb' WHERE start_ctk_bawah = '$start_ctkb'");
