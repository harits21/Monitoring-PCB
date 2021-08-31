<?php
session_start();
include '_templateAdmin.php';
include 'koneksi.php';

$admin = $_SESSION["admin"];
if (!isset($_SESSION["admin"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login_admin.php';</script>";
    exit();
}
?>
<!-- style table accordion -->


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="raftechpcb2021.php">RAFTECH PCB</a>
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
                        <a class="nav-link" href="raftechpcb2021.php">
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
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="datatablesSimple">
                                        <br>
                                        <thead class="table-light">
                                            <tr>
                                                <th rowspan="2">
                                                    <center>No</center>
                                                </th>
                                                <th rowspan="2">
                                                    <center>Nama</center>
                                                </th>
                                                <th rowspan="2">
                                                    <center>No.Invoice</center>
                                                </th>
                                                <th rowspan="2">
                                                    <center>Spec PCB</center>
                                                </th>
                                                <th rowspan="2">
                                                    <center>Jumlah</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Order Verified</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Potong PCB</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Cetak jlr bwh</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Cetak jlr atas</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Masking Bawah</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Masking Atas</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Silkscreen bawah</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>silkscreen atas</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Bor</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Plating</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Finishing</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>QC</center>
                                                </th>
                                                <th colspan="4">
                                                    <center>Packing</center>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                                <td><b>Start</b></td>
                                                <td><b>Stop</b></td>
                                                <td><b>Durasi</b></td>
                                                <td><b>PIC</b></td>
                                            </tr>
                                        </thead>
                                        <?php
                                        $nomor = 1;
                                        $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk");
                                        while ($data = $ambil->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $data['nama_customers']; ?></td>
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
                                                <td><?php echo $date1 =  $data['start_potong']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_potong']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanP']; ?></td>
                                                <td><?php echo $date1 =  $data['start_ctk_bawah']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_ctk_bawah']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanCB']; ?></td>
                                                <td><?php echo $date1 =  $data['start_ctk_atas']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_ctk_atas']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanCA']; ?></td>
                                                <td><?php echo $date1 =  $data['start_masking_bawah']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_masking_bawah']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanMB']; ?></td>
                                                <td><?php echo $date1 =  $data['start_masking_atas']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_masking_atas']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanMA']; ?></td>
                                                <td><?php echo $date1 =  $data['start_silk_bawah']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_silk_bawah']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanSB']; ?></td>
                                                <td><?php echo $date1 =  $data['start_silk_atas']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_silk_atas']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanSA']; ?></td>
                                                <td><?php echo $date1 =  $data['start_bor']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_bor']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanB']; ?></td>
                                                <td><?php echo $date1 =  $data['start_plating']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_plating']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanPLT']; ?></td>
                                                <td><?php echo $date1 =  $data['start_finishing']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_finishing']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanF']; ?></td>
                                                <td><?php echo $date1 =  $data['start_qc']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_qc']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                                <td><?php echo $data['nama_karyawanQC']; ?></td>
                                                <td><?php echo $date1 =  $data['start_packing']; ?></td>
                                                <td><?php echo $date2 =  $data['stop_packing']; ?></td>
                                                <?php
                                                $datetime1 = new DateTime($date1);
                                                $datetime2 = new DateTime($date2);
                                                $interfal = $datetime1->diff($datetime2);
                                                ?>
                                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
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