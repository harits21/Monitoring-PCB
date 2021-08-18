<?php include_once('_templateKaryawan.php');
include 'koneksi.php';
?>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="karyawan.php">RAFTECH PCB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="">Karyawan</a>

            </div>
        </div>
    </div>
</nav>
<!-- END OF NAVBAR -->

<!-- CONTENT -->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="insert_order.php" class="btn btn-primary mt-3">Insert Order</a>
            <a href="proses_PCB.php" class="btn btn-secondary mt-3">Proses PCB</a>
            <h1 class="mt-2">Daftar INVOICE yang sudah diinsert</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Invoice</th>
                        <th>Nama</th>
                        <th>Spec PCB</th>
                        <th>jumlah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk ORDER BY date LIMIT 20");
                    while ($data = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $data['no_invoice']; ?></td>
                            <td><?php echo $data['nama_customer']; ?></td>
                            <td><?php echo $data['spec_pcb']; ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><a href="" class="btn btn-warning">Detail</a></td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->