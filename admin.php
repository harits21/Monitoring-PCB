<?php
session_start();
include '_templateAdmin.php';
include 'koneksi.php';

$admin = $_SESSION["admin"];
if (!isset($_SESSION["admin"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>
<!-- style table accordion -->
<style>
    .accordion1 {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion1:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
</style>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin.php">RAFTECH PCB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search dihilangkan, hanya untuk sebagai jarak tombol logout-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: <?php echo $admin['email_admin'] ?> </div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Admin Management RAFTECH</h1><br>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><?php echo "Selamat datang " . $admin['email_admin'] . ""; ?></li>
                    </ol>

                    <!-- Tabel proses PCB -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel Proses PCB
                        </div>
                        <div class="card-body">
                            <button class="accordion1">Order Verified</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Order Verfied</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, order_verified WHERE order_verified.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 =  $data['start_verif']; ?></td>
                                                    <td><?php echo $date2 =  $data['stop_verif']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                    <td><?php echo $data['nama_karyawanV']; ?></td>
                                                </tr>
                                            <?php
                                                $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Potong PCB</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Potong PCB</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, potong_pcb WHERE potong_pcb.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 =  $data['start_potong']; ?></td>
                                                    <td><?php echo $date2 =  $data['stop_potong']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                    <td><?php echo $data['nama_karyawanP']; ?></td>
                                                </tr>
                                            <?php
                                                $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Cetak Jalur Bawah</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Cetak Jalur Bawah</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, ctk_jalur_bawah WHERE ctk_jalur_bawah.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 =  $data['start_ctk_bawah']; ?></td>
                                                    <td><?php echo $date2 =  $data['stop_ctk_bawah']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                    <td><?php echo $data['nama_karyawanCB']; ?></td>
                                                </tr>
                                            <?php
                                                $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Cetak Jalur Atas</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Cetak Jalur Atas</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, ctk_jalur_atas WHERE ctk_jalur_atas.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_ctk_atas']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_ctk_atas']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanCA'] ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Masking Bawah</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Masking Bawah</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, masking_bawah WHERE masking_bawah.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_masking_bawah']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_masking_bawah']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanMB'] ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Masking Atas</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Masking Atas</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>

                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, masking_atas WHERE masking_atas.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_masking_atas']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_masking_atas']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanMA'] ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            }
                                            ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Silkscreen Bawah</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Silkscreen Bawah</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, silkscreen_bawah WHERE silkscreen_bawah.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $dateSB = $data['start_silk_bawah']; ?></td>
                                                    <td><?php echo $dateSB2 = $data['stop_silk_bawah']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($dateSB);
                                                    $datetime2 = new DateTime($dateSB2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanSB']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Silkscreen Atas</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Silkscreen Atas</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, silkscreen_atas WHERE silkscreen_atas.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_silk_atas']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_silk_atas']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanSA']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Bor</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Silkscreen Atas</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, bor WHERE bor.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_bor']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_bor']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanB']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Plating</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Plating</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong> </td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, plating WHERE plating.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_plating']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_plating']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanPLT']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Finishing</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Finishing</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong></td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, finishing WHERE finishing.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_finishing']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_finishing']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanF']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Quality Control</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Quality Control</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong></td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, qc WHERE qc.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_qc']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_qc']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanQC']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>

                            <button class="accordion1">Packing</button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <br>
                                        <thead>
                                            <tr>
                                                <td>
                                                    <center><strong>No.</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Nama</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>No.Invoice</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Spec PCB</strong></center>
                                                </td>
                                                <td>
                                                    <center><strong>Jumlah</strong></center>
                                                </td>
                                                <td colspan="4">
                                                    <center><strong>Packing</strong></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"></td>
                                                <td><strong>Start</strong></td>
                                                <td><strong>Stop</strong></td>
                                                <td><strong>Durasi</strong></td>
                                                <td><strong>PIC</strong></td>
                                            </tr>
                                            <?php
                                            $nomor = 1;
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, packing WHERE packing.no_invoice = order_masuk.no_invoice");
                                            while ($data = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $data['nama_customer']; ?></td>
                                                    <td><?php echo $data['no_invoice']; ?></td>
                                                    <td><?php echo $data['spec_pcb']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $date1 = $data['start_packing']; ?></td>
                                                    <td><?php echo $date2 = $data['stop_packing']; ?></td>
                                                    <?php
                                                    $datetime1 = new DateTime($date1);
                                                    $datetime2 = new DateTime($date2);
                                                    $interfal = $datetime1->diff($datetime2);
                                                    ?>
                                                    <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                                    <td><?php echo $data['nama_karyawanPCK']; ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; RAFTECH 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion1");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>