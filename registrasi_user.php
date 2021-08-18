<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Registrasi</title>
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
                <form class="login100-form validate-form" method="post" role="form">
                    <span class=" login100-form-title p-b-43">
                        Registrasi
                    </span>
                    <br><br>

                    <div class="wrap-input100 validate-input" data-validate="Nama Harus Diisi">
                        <input class="input100" type="text" name="nama" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Nama</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="No.Telp Harus Diisi">
                        <input class="input100" type="number" name="no_telp" min="0" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">No Telpon</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Email Harus Diisi">
                        <input class="input100" type="text" name="email" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password Harus Diisi">
                        <input class="input100" type="password" name="pass" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <br>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style=" background-color: #5091f4;" name="register">
                            Submit
                        </button>
                    </div>


                    <br>
                    <div class="text-center p-t-46 p-b-20">
                        <a href="login.php">Sudah Punya Akun ? <strong>Kembali ke Login</strong> </a>
                    </div>
                </form>

                <?php
                if (isset($_POST['register'])) {
                    $koneksi->query(" INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `no_telp`, `password`) VALUES ('', '$_POST[nama]','$_POST[email]','$_POST[no_telp]','$_POST[pass]' );");
                    echo "<script>alert('Registrasi Berhasil, Silahkan Login');</script>";
                    echo "<script>location='login.php';</script>";
                }
                ?>

                <div class="login100-more" style="background-image: url('images/raftech.png');">
                </div>
            </div>
        </div>
    </div>



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