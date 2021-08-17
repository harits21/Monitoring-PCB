<?php
include 'koneksi.php';

$start_potong = $_POST['date_p'];
$stop_potong = $_POST['date_potong2'];
$sql = mysqli_query($koneksi, "UPDATE potong_pcb SET stop_potong = '$stop_potong' WHERE start_potong = '$start_potong'");
