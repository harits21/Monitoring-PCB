<?php
include '_templateUser.php';
include 'koneksi.php';
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login_user.php';</script>";
    header('location:login_user.php');
    exit();
}

$ambil = $koneksi->query("SELECT * FROM user");
$pecah = $ambil->fetch_assoc();
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
        <a class="navbar-brand ps-3" href="admin.php">RAFTECH PCB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div>
                <a class="navbar-brand ps-3" href="admin.php">Selamat Datang <strong><?php echo $pecah['nama_user'] ?></strong> ! </a>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="edit_profil.php">Profil</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout_user.php?halaman=logout">Logout</a></li>
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
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            </nav>
                        </div>
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
                    <h1 class="mt-4">Progress</h1><br>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <!-- <pre><?php print_r($_SESSION); ?></pre> -->

                    <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == "logout")
                            include 'logout_user.php';
                    } elseif (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == "edit")
                            include 'edit_profil.php';
                    }
                    ?>


                    </form><br>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Progress
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No.Invoice</th>
                                        <th>Name</th>
                                        <th>No.Invocie</th>
                                        <th>Spec PCB</th>
                                        <th>Jumlah</th>
                                        <th>Order Verified</th>
                                        <th>Potong PCB</th>
                                        <th>Cetak Jalur Bawah</th>
                                        <th>Cetak Jalur Atas</th>
                                        <th>Masking Bawah</th>
                                        <th>Masking Atas</th>
                                        <th>Silkscreen Bawah</th>
                                        <th>Silkscreen Atas</th>
                                        <th>Bor</th>
                                        <th>Plating</th>
                                        <th>Finishing</th>
                                        <th>QC</th>
                                        <th>Packing</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.Invoice</th>
                                        <th>Name</th>
                                        <th>No.Invocie</th>
                                        <th>Spec PCB</th>
                                        <th>Jumlah</th>
                                        <th>Order Verified</th>
                                        <th>Potong PCB</th>
                                        <th>Cetak Jalur Bawah</th>
                                        <th>Cetak Jalur Atas</th>
                                        <th>Masking Bawah</th>
                                        <th>Masking Atas</th>
                                        <th>Silkscreen Bawah</th>
                                        <th>Silkscreen Atas</th>
                                        <th>Bor</th>
                                        <th>Plating</th>
                                        <th>Finishing</th>
                                        <th>QC</th>
                                        <th>Packing</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <!-- <?php while ($pecah = $ambil->fetch_assoc()) { ?> -->

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <!-- <?php } ?> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
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