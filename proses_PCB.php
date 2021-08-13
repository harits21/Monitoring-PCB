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
            <form action="" method="post" class="aksi">
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Invoice</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="id_in" name="id_in" onchange="cek_db()">
                            <option disabled selected>--Pilih No Invoice--</option>
                            <?php
                            include 'koneksi.php';
                            $invoice = mysqli_query($koneksi, "SELECT * FROM order_masuk");
                            while ($row = mysqli_fetch_array($invoice)) {
                                echo "<option value='$row[no_invoice]'>$row[no_invoice]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="" class="col-sm-2 col-form-label">Spec PCB</label>
                    <div class="col-sm-10">
                        <input type="text" id="spec" class="form-control" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" id="jumlah" class="form-control" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="id_karyawan" name="id_karyawan">
                            <option disabled selected>--Pilih Karyawan--</option>
                            <?php
                            $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
                            while ($row = mysqli_fetch_array($karyawan)) {
                                echo "<option value='$row[id_karyawan]'>$row[nama_karyawan]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Order Verified</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date" name="date" class="form-control">
                        <input hidden type="text" id="date2" name="date2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_order()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_order()" value="Stop">
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