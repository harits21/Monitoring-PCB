<?php
include 'koneksi.php';
session_start();
$ambil = $koneksi->query("SELECT * FROM user Where id_user=" . $_SESSION['user']['id_user']);
$pecah = $ambil->fetch_array();
?>
<style>
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 450px;
        margin: 6rem auto 8.1rem auto;
        width: 430px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="user.php">RAFTECH-PCB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post">
            <div>
                <a class="navbar-brand ps-3">Selamat Datang <strong><?php echo $pecah['nama_user'] ?></strong> ! </a>
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
                            Edit Profil
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
                <div class="container-fluid px-4"><br>
                    <h1 class="mt-4"> Edit Profil</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><br> Edit Profil</li>
                    </ol>

                    <!-- <pre><?php print_r($_SESSION); ?></pre> -->
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-1">
                            <div class="card bg-neutral" id="card">
                                <div class="card-body px-lg-6 py-lg-5">
                                    <div class="row">
                                        <div class="container">
                                            <form method="post">
                                                <div class="form-group">
                                                    <h5>&nbsp;Nama</h5>
                                                    <input type="text" name="nama" value="<?php echo $pecah['nama_user'] ?>" class="form-control" style="width:390px;">
                                                </div><br>
                                                <div class="form-group">
                                                    <h5>&nbsp;Email</h5>
                                                    <input type="email" name="email" value="<?php echo $pecah['email_user'] ?>" class="form-control" style="width:390px;">
                                                </div><br>
                                                <div class="form-group">
                                                    <h5>&nbsp;No.Telpon</h5>
                                                    <input type="number" name="telp" value="<?php echo $pecah['no_telp'] ?>" class="form-control" style="width:390px;">
                                                </div><br><br>
                                                <center>
                                                    <button type="submit" name="edit" class="btn btn-primary" onclick="return confirm('Data Sudah Benar?')">&nbsp;Save&nbsp;&nbsp;
                                                    </button> &nbsp;
                                                    <button class="btn btn-danger" type="Reset">Reset</button>
                                                </center>
                                            </form>

                                            <?php
                                            if (isset($_POST['edit'])) {
                                                $koneksi->query("UPDATE user SET nama_user='$_POST[nama]',email_user='$_POST[email]', no_telp='$_POST[telp]' WHERE id_user=" . $_SESSION['user']['id_user']);
                                                echo "<script>alert('Data telah teredit');</script>";
                                                echo "<script>location='user.php';</script>";
                                            }
                                            ?>

                                            <?php
                                            if (isset($_POST['edit'])) {
                                                $koneksi->query("UPDATE user SET nama_user='$_POST[nama]',email_user='$_POST[email]', no_telp='$_POST[telp]'WHERE id_user=" . $_SESSION['user']['id_user']);
                                                echo "<script>alert('Data telah teredit');</script>";
                                                echo "<script>location='index.php';</script>";
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['halaman'])) {
                                                if ($_GET['halaman'] == "logout")
                                                    include 'logout_user.php';
                                            }
                                            ?>

                                        </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your RAFTECH 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>