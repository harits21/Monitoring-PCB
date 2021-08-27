<?php
include 'koneksi.php';
include_once('email.php');

$start_pack = $_POST['date_pack'];
$stop_pack = $_POST['date_pack2'];
$id_in = $_POST['id_in'];
$sql = mysqli_query($koneksi, "UPDATE packing SET stop_packing = '$stop_pack' WHERE no_invoice = '$id_in'");

$email = "harisramadhan2912@gmail.com";
$subject = "Tes Email";
$message = "Ini adalah tes email\n\nRegards,\nAdmin.";
$from = "rasyid.haris@gmail.com";
$headers = "From:" . $from;

// Uncomment this line if you are using online server.
mail($email, $subject, $message, $headers);

// // Send email to customer
// $judul_email = "Pesanan Anda telah selesai";
// $message = "Pesanan PCB anda dengan Nomor Invoice $id_in telah selesai dipacking";
// $getEmail = mysqli_query($koneksi, "SELECT email_customer from order_masuk WHERE no_invoice = '$id_in' ");
// $row = $getEmail->fetch_assoc();

// kirim_email($row['email_customer'], $row['email_customer'], $judul_email, $message);

// // Send email to management
// $judul_email = "Pengerjaan No.Invoice $id_in telah selesai dipacking";
// $message = "Pengerjaan PCB dengan Nomor Invoice $id_in telah selesai pada $stop_pack";
// $getEmail = "farhan.adani@gmail.com";

// kirim_email($getEmail, $getEmail, $judul_email, $message);
