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
        <div class="col-8">
            <h2 class="my-3">Proses Pembuatan PCB</h2>
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Customer</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>--Pilih Nama Customer--</option>
                            <?php
                            $sql = "SELECT * FROM order_masuk";
                            $show = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($show)) {
                            ?>
                                <option value="<?php echo $data['nama_customer'] ?>"><?php echo $data['nama_customer'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Invoice</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="invoice" id="invoice">
                            <option disabled selected>--Pilih No Invoice--</option>
                            <?php
                            $sql = "SELECT * FROM order_masuk";
                            $show = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($show)) {
                            ?>
                                <option value="<?php echo $data['no_invoice'] ?>"><?php echo $data['no_invoice'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Spec PCB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="spec" name="spec" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--Pilih Karyawan--</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Order Verified</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Potong PCB</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cetak Jalur bawah</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cetak jalur Atas</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Masking Bawah</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Masking Atas</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Silkscreen Bawah</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Silkscreen Atas</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Bor</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Plating</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Finishing</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Quality Control</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Packing</label>
                    <div class="col-sm-10">
                        <a href="" class="btn btn-primary">Start</a>
                        <a href="" class="btn btn-success">Stop</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->