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
        <div class="col-8">
            <h2 class="my-3">Form Insert Order</h2>
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Customer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Invoice</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Spec PCB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="" name="" autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Insert Order</button>
            </form>

        </div>
    </div>
</div>
<!-- END OF CONTENT -->