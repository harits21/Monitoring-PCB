<?php
include 'koneksi.php';

$start_potong = $_POST['date_p'];
$stop_potong = $_POST['date_potong2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE potong_pcb SET stop_potong = '$stop_potong' WHERE no_invoice = '$id_in'");
