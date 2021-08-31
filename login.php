<?php
include 'koneksi.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util_login.css">
    <link rel="stylesheet" type="text/css" href="css/main_login.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form class="login100-form validate-form" method="POST" role="form">
                    <span class="login100-form-title p-b-43">
                        LOGIN ADMIN
                    </span>
                    <br><br>

                    <div class="wrap-input100 validate-input" data-validate="Email Harus Benar">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password Harus Benar">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <?php
                    if (isset($_POST['login'])) {
                        $email = $_POST['email'];
                        $password = $_POST['pass'];
                        $ambil = $koneksi->query("SELECT * FROM admin WHERE email_admin='$email' AND password_admin ='$password' ");
                        $cocok = $ambil->num_rows;
                        if ($cocok == 1) {
                            $_SESSION['admin'] = $ambil->fetch_assoc();
                            echo "<div class= 'alert alert-info'> Login Sukses </div>";
                            echo "<meta http-equiv= 'refresh' content='1;url=admin.php'>";
                        } else {
                            echo "<div class= 'alert alert-danger'> Login Gagal </div>";
                            echo "<meta http-equiv= 'refresh' content='1;url=login.php'>";
                        }
                    }
                    ?>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <!-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"><br>
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label> -->
                            <!-- <div class="text-right">
                                <a href="lupa_pass.php" class="">
                                    Lupa Password?
                                </a>
                            </div> -->
                        </div>
                        <br>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style=" background-color: #5091f4;" type="submit" value="login" name="login">
                            Login
                        </button>
                    </div>

                    <br>
                    <div class="text-center p-t-46 p-b-20">
                        <a href="login_user.php">Login Sebagai <strong>User</strong></a>
                    </div>


                    <br>
                    <div class="text-center p-t-46 p-b-20">
                        <a href="registrasi.php">Belum Punya Akun ? <strong>Registrasi Disini</strong> </a>
                    </div>

                    <br><br><br><br><br>
                    <div class="text-center p-t-46 p-b-20">
                        <a href="index.php">
                            <strong>
                                << </strong> Kembali ke Halaman Utama </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/raftech.png');">
                </div>
            </div>
        </div>
    </div>


    <!-- <div id="page-wrapper">
        <div id="page-inner">
            <?php
            if (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "lupas")
                    include 'lupa_pass.php';
            } elseif (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "registrasi")
                    include 'registrasi.php';
            } elseif (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "index")
                    include 'index.php';
            }
            ?>
        </div>
    </div> -->


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main_login.js"></script>

</body>

</html>