<?php

// session_start();
// //skrip koneksi
// require 'koneksi.php';
// $semuadata = array();

// if (isset($_POST["kirim"])) {
//     $invoice = $_POST["invoice"];
//     if (empty($invoice)) {
//         $ambil = $koneksi->query("SELECT * FROM order_masuk, order_verified, potong_pcb, ctk_jalur_bawah WHERE order_masuk.no_invoice = '$_POST[invoice]' AND order_verified.no_invoice = order_masuk.no_invoice
//             AND potong_pcb.no_invoice = order_masuk.no_invoice AND ctk_jalur_bawah.no_invoice = order_masuk.no_invoice");
//         $cocok = $ambil->num_rows;
//         if ($cocok == 1) {
//             $_SESSION['user'] = $ambil->fetch_assoc();
//             echo "<div class= 'alert alert-info'> Sukses </div>";
//             echo "<meta http-equiv= 'refresh' content='1;url=admin.php'>";
//         } else {
//             echo "<div class= 'alert alert-danger'>Gagal </div>";
//             echo "<meta http-equiv= 'refresh' content='1;url=login.php'>";
//         }
//     }
// }

// if (isset($_POST["kirim"])) {
//     $invoice = $_POST["invoice"];
//     if ($invoice == "") {
//         if (empty($invoice)) {
//             $ambil = $koneksi->query("SELECT * FROM order_masuk, order_verified, potong_pcb, ctk_jalur_bawah WHERE order_masuk.no_invoice = '$_POST[invoice]' AND order_verified.no_invoice = order_masuk.no_invoice
//             AND potong_pcb.no_invoice = order_masuk.no_invoice AND ctk_jalur_bawah.no_invoice = order_masuk.no_invoice");
//             echo "<div class= 'alert alert-info'> Berhasil </div>";
//         } else {
//             echo "<div class= 'alert alert-danger'>Gagal </div>";
//         }
//     } elseif ($invoice == "") {
//         $ambil = $koneksi->query("SELECT * FROM order_masuk, order_verified, potong_pcb, ctk_jalur_bawah WHERE order_masuk.no_invoice = '$_POST[invoice]' AND order_verified.no_invoice = order_masuk.no_invoice
//         AND potong_pcb.no_invoice = order_masuk.no_invoice AND ctk_jalur_bawah.no_invoice = order_masuk.no_invoice");
//         echo "<div class= 'alert alert-danger'>Berhasil </div>";
//     } else {
//         echo "<div class= 'alert alert-danger'>Gagal </div>";
//     }
// }
