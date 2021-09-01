<?php
session_start();
include '_templateUser.php';
include 'koneksi.php';


if (!isset($_SESSION["user"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login_user.php';</script>";
    exit();
}


$ambil = $koneksi->query("SELECT * FROM customers Where id_customers=" . $_SESSION['user']['id_customers']);
$pecah = $ambil->fetch_array();
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
                <a class="navbar-brand ps-3">Selamat Datang <strong><?php echo $pecah['nama_customers'] ?></strong> ! </a>
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
            <main>
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Lacak Pesanan</h2>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <p>Tabel dibawah ini merupakan tabel tracking progress dari pesanan Anda. Jika kolom proses masih kosong atau belum ada tanggal itu berarti proses belum dilakukan. Proses yang sudah selesai dilakukan akan ada tanggal beserta jam selesainya.</p>
                        </li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel Proses Pesanan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatablesSimple">
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
                                            <th>
                                                <center>Order Verified</center>
                                            </th>
                                            <th>
                                                <center>Potong PCB</center>
                                            </th>
                                            <th>
                                                <center>Cetak jlr bwh</center>
                                            </th>
                                            <th>
                                                <center>Cetak jlr atas</center>
                                            </th>
                                            <th>
                                                <center>Masking Bawah</center>
                                            </th>
                                            <th>
                                                <center>Masking Atas</center>
                                            </th>
                                            <th>
                                                <center>Silkscreen bawah</center>
                                            </th>
                                            <th>
                                                <center>silkscreen atas</center>
                                            </th>
                                            <th>
                                                <center>Bor</center>
                                            </th>
                                            <th>
                                                <center>Plating</center>
                                            </th>
                                            <th>
                                                <center>Finishing</center>
                                            </th>
                                            <th>
                                                <center>QC</center>
                                            </th>
                                            <th>
                                                <center>Packing</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td colspan="13"><b>
                                                    <center>Proses selesai dilakukan pada</center>
                                                </b></td>
                                        </tr>
                                    </thead>
                                    <?php
                                    $nomor = 1;
                                    $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk WHERE email_customers = '$pecah[email_customers]'");
                                    while ($data = $ambil->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $data['nama_customers']; ?></td>
                                            <td><?php echo $data['no_invoice']; ?></td>
                                            <td><?php echo $data['spec_pcb']; ?></td>
                                            <td><?php echo $data['jumlah']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_verif']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_potong']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_ctk_bawah']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_ctk_atas']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_masking_bawah']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_masking_atas']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_silk_bawah']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_silk_atas']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_bor']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_plating']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_finishing']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_qc']; ?></td>
                                            <td><?php echo $date2 =  $data['stop_packing']; ?></td>
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
    //end of content