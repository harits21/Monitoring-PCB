<?php
include 'koneksi.php';
$invoice = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM order_masuk WHERE no_invoice ='$_GET[id_in]'"));
$data_INV = array(
    'spec' => $invoice['spec_pcb'],
    'jumlah' => $invoice['jumlah'],
);

echo json_encode($invoice);
