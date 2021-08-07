<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>
<title>Raftech-PCB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Open Sans", sans-serif
    }

    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
</style>

<body class="w3-theme-l5">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Raftech-PCB</a>
            <div class="w3-dropdown-hover w3-hide-small w3-right">

                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">LOGOUT</a>
            </div>


            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="images/user1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </a> -->

        </div>
    </div>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <div class="w3-col m15">
            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

                <h2>
                    <center><strong>SELAMAT DATANG DI RAFTECH</strong></center>
                </h2><br>
                <hr class="w3-clear">
                <div class="">
                    <pre><?php print_r($_SESSION); ?></pre>
                </div><br><br><br><br>
            </div>
        </div>
    </div>
    <br>

    <!-- <div id="page-wrapper">
        <div id="page-inner">
            <?php
            if (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "logout")
                    include 'logout.php';
            } elseif (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "edit")
                    include 'edit.php';
            } elseif (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "hapusproduk")
                    include 'hapusproduk.php';
            }
            ?>
        </div>
    </div> -->

    <script>
        function hitung() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById("demo").innerHTML = this.responseText;
                    alert(this.responseText);
                    //document.getElementById("basicExampleModal").showModal();
                }
            };
            xhttp.open("POST", "harga_jasapcb2.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("panjang=10&lebar=10&pcb=fr2&layer=single&ma=no&mb=no&ss=no&desain=eagle");
        }
    </script>

    <script>
        $(document).ready(function() {

            $("#hitung").click(function() {
                panj = $("#inputpanjang").val();
                leb = $("#inputlebar").val();
                jml = $("#inputjumlah").val();
                tipepcb = $("input[name='grouppcb']:checked").val();
                tipelayer = $("input[name='grouplayer']:checked").val();
                maska = $("input[name='groupmaskingatas']:checked").val();
                maskb = $("input[name='groupmaskingbawah']:checked").val();
                silk = $("input[name='groupsilkscreen']:checked").val();
                filepcb = $("input[name='groupfile']:checked").val();
                bentukpcb = $("input[name='groupbentuk']:checked").val();

                //alert(panj+" "+leb+" "+tipepcb+" "+tipelayer+" "+maska+" "+maskb+" "+silk+" "+filepcb);
                if ((parseFloat(panj) > 0) && (parseFloat(leb) > 0) && (parseFloat(jml) > 0)) {

                    $.post("harga_jasapcb2.php", {
                            panjang: panj,
                            lebar: leb,
                            jumlah: jml,
                            pcb: tipepcb,
                            layer: tipelayer,
                            ma: maska,
                            mb: maskb,
                            ss: silk,
                            desain: filepcb,
                            bentuk: bentukpcb
                        },
                        function(data, status) {
                            //alert("Data: " + data + "\nStatus: " + status);
                            //tsss=$("input[name='groupsilkscreen']:checked"). val();
                            //biaya=$("#tes").text(data);
                            $("#qty").html("2. Pada link di atas, isikan jumlah pesanan sebanyak <b>" + Math.ceil(parseInt(data) / 1000) + "</b>");

                            $("#tes1").html("Ukuran: " + panj + "x" + leb + " cm<br>" +
                                "Jumlah: " + jml + "<br>" +
                                "Layer: " + tipelayer + "<br>" +
                                "Tipe: " + tipepcb + "<br>" +
                                "Mask atas: " + maska + "<br>" +
                                "Mask bawah: " + maskb + "<br>" +
                                "Silkscreen: " + silk + "<br>" +
                                "File: " + filepcb + "<br>" +
                                "Bentuk: " + bentukpcb + "<br><u>" +
                                "Biaya: " + data + "</u><br>");


                            $("#summary").modal();
                        });
                } else alert("ukuran pcb atau jumlah pesanan minimal 1");
            });


            $("#hitung2").click(function() {
                $("#basicExampleModal").modal();
            });
        });
    </script>

    <script>
        // Accordion
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>