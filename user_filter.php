<?php
session_start();
include '_templateUser.php';
include 'koneksi.php';

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login_user.php';</script>";
    exit();
}

$ambil = $koneksi->query("SELECT * FROM user Where id_user=" . $_SESSION['user']['id_user']);
$pecah = $ambil->fetch_array();


if (isset($_POST["insert"])) {
    $noinvoice = $_POST["invoice"];
    if ($noinvoice == "") {
        echo "<script>alert('No invoice belum diinputkan, silahkan inputkan no invoice :)');</script>";
        echo "<script>location='user.php';</script>";
    } else {
        $ambil = $koneksi->query("SELECT * FROM order_masuk, order_verified, potong_pcb, ctk_jalur_bawah, ctk_jalur_atas, masking_bawah, masking_atas, silkscreen_bawah, silkscreen_atas, bor, plating, finishing, qc, packing WHERE order_masuk.no_invoice = '$noinvoice' AND order_verified.no_invoice = order_masuk.no_invoice
        AND potong_pcb.no_invoice = order_masuk.no_invoice AND ctk_jalur_bawah.no_invoice = order_masuk.no_invoice AND ctk_jalur_atas.no_invoice = order_masuk.no_invoice AND masking_bawah.no_invoice = order_masuk.no_invoice AND masking_atas.no_invoice = order_masuk.no_invoice AND silkscreen_bawah.no_invoice = order_masuk.no_invoice AND silkscreen_atas.no_invoice = order_masuk.no_invoice AND bor.no_invoice = order_masuk.no_invoice AND plating.no_invoice = order_masuk.no_invoice AND finishing.no_invoice = order_masuk.no_invoice AND qc.no_invoice = order_masuk.no_invoice AND packing.no_invoice = order_masuk.no_invoice");
    }
}
?>



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
        <a class="navbar-brand ps-3" href="user.php">RAFTECH PCB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div>
                <a class="navbar-brand ps-3">Selamat Datang <strong><?php echo $pecah['nama_user'] ?></strong> ! </a>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout_user.php">Logout</a></li>
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
                        <a class="nav-link" href="user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="edit_profil.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Profil
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h2 class="mt-4">Lacak Pesanan</h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <p>Tabel dibawah ini merupakan tabel tracking progress dari pesanan Anda. Untuk menampilkan progress pesanan Anda silahkan masukkan Nomor Invoice pada kolom dibawah ini dan klik tombol "Lacak Progress".</p>
                    </li>
                </ol>

                <form action="user_filter.php" method="POST">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Masukkan No Invoice</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="invoice" name="invoice" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary" name="insert">Lacak Progress</button>
                        </div>
                    </div>
                </form>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Proses PCB
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <table class="table table-bordered">
                                    <?php
                                    while ($row = $ambil->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $row['nama_customer'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>No invoice</td>
                                            <td><?php echo $row['no_invoice'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Spec PCB</td>
                                            <td><?php echo $row['spec_pcb'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td><?php echo $row['jumlah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Order Verified</td>
                                            <td>Proses ini telah selesai dilakukan pada <b><?php echo  $row['stop_verif'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>Potong PCB</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_potong'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Cetak Jalur Bawah</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_ctk_bawah'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Cetak Jalur Atas</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_ctk_atas'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Masking Bawah</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_masking_bawah'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Masking Atas</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_masking_atas'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Silkscreen Bawah</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_silk_bawah'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Silkscreen Atas</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_silk_atas'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Bor</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_bor'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Plating</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_plating'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Finishing</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_finishing'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Quality Control</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_qc'] ?></u></td>
                                        </tr>
                                        <tr>
                                            <td>Packing</td>
                                            <td>Proses ini telah selesai dilakukan pada <u><?php echo $row['stop_packing'] ?></u></td>
                                        </tr>
                                    <?php } ?>
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