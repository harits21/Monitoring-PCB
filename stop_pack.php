<?php
include 'koneksi.php';
include_once('email.php');

$start_pack = $_POST['date_pack'];
$stop_pack = $_POST['date_pack2'];
$id_in = $_POST['id_in'];
$durasi = $_POST['durasiPCK'];
$sql = mysqli_query($koneksi, "UPDATE order_masuk SET stop_packing = '$stop_pack', durasiPCK = '$durasi' WHERE no_invoice = '$id_in'");

$getEmail = mysqli_query($koneksi, "SELECT email_customers from order_masuk WHERE no_invoice = '$id_in' ");
$row = $getEmail->fetch_assoc();


//Send email to customers
$email = "$row[email_customers]";
$subject = "Proses pembuatan PCB Anda dengan Nomor Invoice $id_in telah selesai";
$message = "Proses pembuatan PCB Anda telah selesai dan siap dikirim, silahkan tunggu pesanan anda sampai dan lihat progress pengirimannya melalui e-commerce yang anda pakai\n\nRegards,\nAdmin.";
$from = "noreply@raftechpcb.com";
$headers = "From:" . $from;

// Uncomment this line if you are using online server.
mail($email, $subject, $message, $headers);

// Send email to management
$emailadmin = "rasyid.haris@gmail.com";
$subject_admin = "Proses Pembuatan PCB Nomor Invoice $id_in telah selesai";
$message_admin = "Pengerjaan PCB dengan Nomor Invoice $id_in telah selesai pada $stop_pack\n\nRegards,\nAdmin.";
$from_admin = "noreply@raftechpcb.com";
$headers_admin = "From:" . $from_admin;

// Uncomment this line if you are using online server.
mail($emailadmin, $subject_admin, $message_admin, $headers_admin);
