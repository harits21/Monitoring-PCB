<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
}
?>

<H2>SELAMAT DATANG</H2>
<pre><?php print_r($_SESSION); ?></pre>