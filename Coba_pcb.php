<?php include_once('_templateKaryawan.php');
include 'config.php';
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
            <form action="">
                <table>

                    <td>ID</td>
                    <td><select onchange="cek_database()" id="id">
                            <option value="" selected>- Pilih -</option>
                            <?php
                            $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
                            while ($row = mysqli_fetch_array($karyawan)) {
                                echo "<option value='$row[id]'>$row[id]</option>";
                            }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td><input type="text" id="nama_karyawan"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                        </td>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea id="address" style="width: 300px;"></textarea></td>
                    </tr>

                </table>

            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript">
                function cek_database() {
                    var id = $('#id').val();
                    $.ajax({
                        url: 'ajax.php',
                        data: "id=" + id,
                    }).success(function(data) {
                        var json = data,
                            obj = JSON.parse(json);
                        $('#nama_karyawan').val(obj.nama_karyawan);
                        $('#address').val(obj.address);

                        var $jenis_kelamin = $('input:radio[name=jenis_kelamin]');
                        if (obj.$jenis_kelamin == 'laki-laki') {
                            $jenis_kelamin.filter('[value=laki=laki]').prop('checked', true);
                        } else {
                            $jenis_kelamin.filter('[value=perempuan]').prop('checked', true);
                        }
                    });
                }
            </script>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2 class="my-3">Proses Pembuatan PCB</h2>
                    <form action="">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2">No Invoice</label>
                        </div>
                        <div class="col-sm-10">
                            <select id="id_in" onchange="cek_db()">
                                <option value="" selected>- Pilih No Invoice -</option>
                                <?php
                                include 'koneksi.php';
                                $invoice = mysqli_query($koneksi, "SELECT * FROM order_masuk");
                                while ($row = mysqli_fetch_array($invoice)) {
                                    echo "<option value='$row[no_invoice]'>$row[no_invoice]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Spec PCB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="spec">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jumlah">
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        function cek_db() {
                            var id_in = $('#id_in').val();
                            $.ajax({
                                url: 'cek_db.php',
                                data: "id_in=" + id_in,
                            }).success(function(data) {
                                var json = data,
                                    obj = JSON.parse(json);
                                $('#spec').val(obj.spec_pcb);
                                $('#jumlah').val(obj.jumlah);
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
        <!-- END OF CONTENT -->