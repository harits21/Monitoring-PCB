<?php include_once('_templateKaryawan.php');
include 'koneksi.php';
session_start();

$logged = $_SESSION["karyawan"];
if (!isset($_SESSION["karyawan"])) {
    echo "<script>alert('Anda harus login terlebih dahulu');</script>";
    echo "<script>location='Raftech_Kpcb.php';</script>";
    exit();
}

?>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo "Halo, " . $logged['nama_karyawan'] . "" ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout_karyawan.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END OF NAVBAR -->

<!-- CONTENT -->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="insert_order.php" class="btn btn-primary mt-3">Insert Order</a>
            <h1 class="mt-2">Daftar INVOICE yang sudah diinsert</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Invoice</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Spec PCB</th>
                        <th>jumlah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk ORDER BY date");
                    while ($data = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $data['no_invoice']; ?></td>
                            <td><?php echo $data['nama_customers']; ?></td>
                            <td><?php echo $data['email_customers'] ?></td>
                            <td><?php echo $data['spec_pcb']; ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->