<?php
include 'config.php';
$karyawan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id = '$_GET[id]'"));
$data_karyawan = array(
    'nama_karyawan' => $karyawan['nama_karyawan'],
    'jenis_kelamin' => $karyawan['jenis_kelamin'],
    'address' => $karyawan['address'],
);

echo json_encode($data_karyawan);
