<?php
include '_templateKaryawan.php';
include 'koneksi.php';
session_start();
?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="Raftech_Kpcb.php">RAFTECH PCB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        </div>
    </div>
</nav>
<!-- END OF NAVBAR -->

<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST">
                <div class="mt-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="namaKaryawan" id="namaKaryawan" autofocus>
                </div>
                <div class="mt-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="passwordK" id="passwordK">
                </div> <br>
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['login'])) {
    $namaK = $_POST["namaKaryawan"];
    $passwordK = $_POST["passwordK"];
    $sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nama_karyawan = '$namaK' AND password_karyawan = '$passwordK' ");
    $cocok = $sql->num_rows;
    if ($cocok == 1) {
        $_SESSION['karyawan'] = $sql->fetch_assoc();
        if ($_SESSION['karyawan']['role'] == "Insert") {
            echo "<div class= 'alert alert-info'> Login Sukses </div>";
            echo "<meta http-equiv= 'refresh' content='1;url=karyawan.php'>";
        } else {
            echo "<div class= 'alert alert-info'> Login Sukses </div>";
            echo "<meta http-equiv= 'refresh' content='1;url=proses_PCB.php'>";
        }
    } else {
        echo "<div class= 'alert alert-danger'> Login Gagal </div>";
        echo "<meta http-equiv= 'refresh' content='1;url=Raftech_Kpcb.php'>";
    }
}

?>