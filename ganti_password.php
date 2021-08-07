<?php
include 'koneksi.php';
include_once("fungsi.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Ganti Password</title>
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
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title p-b-43">
                        Ganti Password
                    </span>
                    <br><br>

                    <?php
                    if (isset($_SESSION['email_user']) != '') {
                        header("location:index.php");
                        exit();
                    }

                    $err = "";
                    $sukses = "";

                    $email = $_GET['email'];
                    $token = $_GET['token'];

                    if ($token == '' or $email == '') {
                        $err .= "<div class= 'alert alert-danger'>Link tidak valid. Email dan token tidak tersedia</a></div>";
                    } else {
                        $sql1 = " select * from user where email_user = '$email' and token_ganti_password = '$token'";
                        $q1 = mysqli_query($koneksi, $sql1);
                        $n1 = mysqli_num_rows($q1);

                        //masih error
                        if ($n1 < 0) {
                            $err .= "<div class= 'alert alert-danger'>Link tidak valid. Email dan token tidak tersedia</a></div>";
                        }
                    }

                    if (isset($_POST['submit'])) {
                        $password = $_POST['password'];
                        $konfirmasi_password = $_POST['konfirmasi_password'];

                        if ($password == '' or $konfirmasi_password == '') {
                            $err .= "<div class= 'alert alert-danger'>Silahkan Masukkan Password Serta Konfirmasi Password</a></div>";
                        } elseif ($konfirmasi_password != $password) {
                            $err .= "<div class= 'alert alert-danger'>Password tidak sesuai dengan Konfirmasi password</a></div>";
                        }

                        if (empty($err)) {
                            $koneksi->query("INSERT INTO user (`id_user`, `nama_user`, `email_user`, `no_telp`, `password`, `token_ganti_password`) VALUES (NULL, NULL, NULL, NULL, '$_POST[password]', '');");
                            $koneksi->query("UPDATE user SET token_ganti_password = '', password = '$password' where email_user = '$email' ");
                            $sukses = "<div class= 'alert alert-info'>Password Sukses Diganti. Silahkan Login</div>";
                            // echo "<script>alert('Password Sukses Diganti. Silahkan Login');</script>";
                            // echo "<script>location='login.php';</script>";

                            // $sql1 = "update user set token_ganti_password = '', password=md5($password) where email_user = '$email'";
                            // mysqli_query($koneksi, $sql1);
                            // $sukses = "<div class= 'alert alert-info'>Password Sukses Diganti. 
                            // Silahkan <a href= '" . url_dasar() . "/login.php' >Login</a></div>";
                        }
                    }
                    ?>

                    <?php if ($err) {
                        echo "<div class='error'>$err</div>";
                    }
                    ?>

                    <?php if ($sukses) {
                        echo "<div class='Sukses'>$sukses</div>";
                    }
                    ?>

                    <div class="wrap-input100 validate-input" data-validate="Harus di isi">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate="Harus di isi">
                        <input class="input100" type="password" name="konfirmasi_password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Konfirmasi Password</span>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style=" background-color: #5091f4;" type="submit" name="submit" value="Ganti Password">
                            Submit
                        </button>
                    </div>
                    <br>
                    <div class="text-center p-t-46 p-b-20"><br><br><br>
                        <a href="login.php"><strong>Kembali Ke Login</strong> </a>
                    </div>


                </form>

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