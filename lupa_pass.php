<?php
include 'koneksi.php';
include_once("fungsi.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Lupa Password</title>
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
                        Lupa Password
                    </span>
                    <br><br>

                    <?php
                    if (isset($_SESSION['email']) != '') {
                        header("location:index.php");
                        exit();
                    }

                    $err = "";
                    $sukses = "";
                    $email = "";

                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        if ($email == '') {
                            $err = 'Silahkan Masukan Email';
                            $err = "<div class= 'alert alert-danger'>Silahkan Masukan Email</a></div>";
                        } else {
                            $sql1 = "select * from user where email_user ='$email' ";
                            $q1 =  mysqli_query($koneksi, $sql1);
                            $n1 = mysqli_num_rows($q1);

                            if ($n1 < 1) {
                                $err = "<div class= 'alert alert-danger'> Email : <b>$email</b> tidak ditemukan </div>";
                            }
                        }

                        if (empty($err)) {
                            $token_ganti_password = md5(rand(0, 1000));
                            $judul_email = "Ganti Password";
                            $isi_email = "Seseorang meminta untuk perubahan password, Silahkan klik link dibawah ini:</br>";
                            $isi_email .= url_dasar() . "/ganti_password.php?email=$email&token=$token_ganti_password";
                            kirim_email($email, $email, $judul_email, $isi_email);

                            $sql1 = "update user set token_ganti_password = '$token_ganti_password' where email = '$email' ";
                            mysqli_query($koneksi, $sql1);
                            $sukses = "<div class= 'alert alert-info'>Link Ganti Password sudah dikirim ke email anda</div>";
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

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style=" background-color: #5091f4;" type="submit" name="submit" value="Lupa Password">
                            Submit
                        </button>
                    </div>


                    <br>
                    <div class="text-center p-t-46 p-b-20"><br><br><br>
                        <a href="login_user.php"><strong>Kembali Ke Login</strong> </a>
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