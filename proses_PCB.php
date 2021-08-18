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
                            $invoice = mysqli_query($koneksi, "SELECT * FROM order_masuk ORDER BY date LIMIT 20");
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
                        <select class="form-select" aria-label="Default select example" id="nama_karyawan" name="nama_karyawan">
                            <option disabled selected>--Pilih Karyawan--</option>
                            <?php
                            $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
                            while ($row = mysqli_fetch_array($karyawan)) {
                                echo "<option value='$row[nama_karyawan]'>$row[nama_karyawan]</option>";
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
                        <input hidden type="text" id="date_p" name="date_p" class="form-control">
                        <input hidden type="text" id="date_potong2" name="date_potong2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_potong()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_potong()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cetak Jalur bawah</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_ctkb" name="date_ctkb" class="form-control">
                        <input hidden type="text" id="date_ctkb2" name="date_ctkb2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_ctkb()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_ctkb()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cetak jalur Atas</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_ctka" name="date_ctka" class="form-control">
                        <input hidden type="text" id="date_ctka2" name="date_ctka2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_ctka()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_ctka()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Masking Bawah</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_mb" name="date_mb" class="form-control">
                        <input hidden type="text" id="date_mb2" name="date_mb2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_mb()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_mb()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Masking Atas</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_ma" name="date_ma" class="form-control">
                        <input hidden type="text" id="date_ma2" name="date_ma2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_ma()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_ma()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Silkscreen Bawah</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_sb" name="date_sb" class="form-control">
                        <input hidden type="text" id="date_sb2" name="date_sb2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_sb()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_sb()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Silkscreen Atas</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_sa" name="date_sa" class="form-control">
                        <input hidden type="text" id="date_sa2" name="date_sa2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_sa()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_sa()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Bor</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_bor" name="date_bor" class="form-control">
                        <input hidden type="text" id="date_bor2" name="date_bor2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_bor()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_bor()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Plating</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_plat" name="date_plat" class="form-control">
                        <input hidden type="text" id="date_plat2" name="date_plat2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_plat()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_plat()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Finishing</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_fi" name="date_fi" class="form-control">
                        <input hidden type="text" id="date_fi2" name="date_fi2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_fi()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_fi()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Quality Control</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_qc" name="date_qc" class="form-control">
                        <input hidden type="text" id="date_qc2" name="date_qc2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_qc()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_qc()" value="Stop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Packing</label>
                    <div class="col-sm-10">
                        <input hidden type="text" id="date_pack" name="date_pack" class="form-control">
                        <input hidden type="text" id="date_pack2" name="date_pack2" class="form-control">
                        <input type="button" class="btn btn-primary" onclick="start_pack()" value="Start">
                        <input type="button" class="btn btn-success" onclick="stop_pack()" value="Stop">
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
<!-- END OF CONTENT -->