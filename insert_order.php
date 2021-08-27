<?php include_once('_templateKaryawan.php');
include 'koneksi.php';
session_start();
$logged = $_SESSION['karyawan'];
if (!isset($_SESSION["karyawan"])) {
    echo "<script>alert('Anda harus login terlebih dahulu');</script>";
    echo "<script>location='Raftech_Kpcb.php';</script>";
    exit();
}


?>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="karyawan.php">Navbar</a>
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
        <div class="col-8">
            <h2 class="my-3">Form Insert Order</h2>
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="nama_karyawan" name="nama_karyawan">
                            <option disabled selected>--Pilih Karyawan--</option>
                            <?php
                            // $sql = $koneksi->query("SELECT * FROM karyawan Where id_karyawan=" . $_SESSION['karyawan']['id_karyawan']);
                            // $pecah = $sql->fetch_array();
                            $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan Where id_karyawan=" . $_SESSION['karyawan']['id_karyawan']);
                            while ($row = mysqli_fetch_array($karyawan)) {
                                echo "<option value='$row[nama_karyawan]'>$row[nama_karyawan]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Invoice</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="invoice" name="invoice" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Customer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_cust" name="nama_cust" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Email Customer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email_cust" name="email_cust" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Spec PCB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="spec" name="spec" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="insert">Insert Order</button>
            </form>

            <?php
            if (isset($_POST['insert'])) {
                $koneksi->query("INSERT INTO order_masuk (no_invoice, nama_customer, email_customer, spec_pcb, jumlah, nama_karyawan) VALUES ('$_POST[invoice]', '$_POST[nama_cust]', '$_POST[email_cust]', '$_POST[spec]', '$_POST[jumlah]', '$_POST[nama_karyawan]')");
                echo "<div class='alert alert-info'>Data Tersimpan</div>";
                echo "<meta http-equiv='refresh' content='1;url=insert_order.php'>";
            }
            ?>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->