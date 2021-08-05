<?php include_once('_templateKaryawan.php') ?>


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
                        <th>Nama</th>
                        <th>No Invoice</th>
                        <th>Spec PCB</th>
                        <th>jumlah</th>
                        <th>Detail</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->