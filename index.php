<!DOCTYPE html>
<html>
<title>Raftech-PCB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
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

                <a href="login_user.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">LOGIN</a>
            </div>


            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="images/user1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </a> -->

        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a> -->
        <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a> -->
        <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    </div>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row ">
            <!-- Left Column -->
            <div class="w3-col m2">
                <!-- Profile -->
                <br>
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container"> <br>
                        <h4 class="w3-center"><strong>My Profile</strong> </h4><br>
                        <p class="w3-center"><img src="images/raftech.jpg" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
                    </div>
                </div>
                <br>

                <!-- Accordion -->
                <div class="w3-card w3-round">
                    <div class="w3-white">
                        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-picture-o fa-fw w3-margin-right"></i> My Photos</button>
                        <div id="Demo3" class="">
                            <div class="w3-row-padding">

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol><br>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/produk1.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <!-- <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p> -->
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk2.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk3.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk4.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk5.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div><br>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/produk1.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk2.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk3.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk4.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/produk5.jpg" class="d-block w-100" alt="..." height="270" width="300">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <br>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="w3-col m8">
                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

                    <h2>
                        <center><strong>SELAMAT DATANG DI RAFTECH</strong></center>
                    </h2><br>
                    <hr class="w3-clear">
                    <div class="">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis knostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                    </div><br><br><br><br>

                    <h2>
                        <center><strong>Perhitungan Biaya Cetak PCB</strong></center>
                    </h2><br>
                    <hr class="w3-clear">
                    <div class="card-header bg-primary text-white">
                        <h4><strong>Biaya Cetak PCB</strong> </h4>
                    </div>

                    <div class="card-body">

                        <!--Text-->
                        <br>
                        <h5 class="card-text">Mohon diisi sesuai dengan data sebenarnya. Kesalahan pengisian data dapat berakibat pada keterlambatan pemrosesan pesanan atau bahkan ditolak</h5>
                        <h5 class="card-text"><b>Target pengerjaan</b>: 2 hari kerja (minggu/tgl merah tidak termasuk) untuk pcb non masking/silkscreen, 3 hari kerja untuk pcb dengan masking/silkscreen, 4 hari kerja untuk pcb double layer (jumlah pesanan di bawah 10 pcs).
                            Jika lebih dari 10 pcs, menyesuaikan beban kerja.</h5>
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-header"><i class="fa fa-warning" style="font-size:20px;color:yellow"></i> Ketentuan Desain PCB</div>
                            <div class="card-body">
                                <p class="card-text text-white">- Lebar jalur min 0.4 mm
                                    <br>- Jarak antar jalur (clearance) min 0.5 mm <i class="fa fa-question-circle" style="font-size:20px;color:yellow" data-toggle="modal" data-target="#modaljalur"></i>
                                    <br>- Diameter drill untuk lubang via/vias (through hole) untuk pcb double layer = 1 mm (lubang via saja, tidak untuk kaki komponen) <i class="fa fa-question-circle" style="font-size:20px;color:yellow" data-toggle="modal" data-target="#modalvia"></i>
                                    <br>- Diameter drill untuk lubang via/vias (through hole) untuk pcb double layer = 1.1 mm (lubang via yang dimasuki kaki komponen) <i class="fa fa-question-circle" style="font-size:20px;color:yellow" data-toggle="modal" data-target="#modalvia"></i>
                                    <br><br>Jika ada jalur yang <b><u>short</u></b> karena melanggar ketentuan, maka hal tsb di luar tanggung jawab kami
                                </p>
                            </div>
                        </div>

                        <p class="card-text"> *Tekan tombol <i class="fa fa-question-circle" style="font-size:18px;color:red"></i> untuk petunjuk pengisian atau ketentuan di item tersebut</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                        <h5 class="font-weight-normal mb-3"><strong> Ukuran PCB</strong>
                            <!--i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalukuran"></i-->
                        </h5>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputpanjang" class="form-control" min="1" required>
                                    <label for="inputpanjang"><i>Panjang (cm)</i></label>
                                </div>
                            </div><br>
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputlebar" class="form-control" min="1" required>
                                    <label for="inputlebar"><i>Lebar (cm)</i></label>
                                </div>
                            </div>
                        </div>

                        <h5 class="font-weight-normal mb-3"><strong>Jumlah (Quantity)</strong> </h5>
                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputjumlah" class="form-control" min="1" required>
                                    <label for="inputjumlah"><i>pcs</i></label>
                                </div>
                            </div>

                        </div>

                        <h5 class="font-weight-normal mb-3"><strong>Layer</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control ">
                            <input type="radio" class="form-check-input" id="inputlayersingle" value="single" name="grouplayer" checked>
                            <label class="form-check-label" for="inputlayersingle">Single</label>
                        </div><br>
                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputlayerdouble" value="double" name="grouplayer">
                            <label class="form-check-label" for="inputlayerdouble">Double
                                <!--i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modaldouble"></i-->
                            </label>
                        </div>

                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div> -->

                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Tipe PCB</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="defaultGroupExample1" value="fr2" name="grouppcb" checked="">
                            <label class="form-check-label" for="defaultGroupExample1">FR2 (Pertinaks) </label>
                        </div><br>

                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="defaultGroupExample2" value="fr4" name="grouppcb">
                            <label class="form-check-label" for="defaultGroupExample2">FR4 (Fiber)</label>
                        </div>


                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Masking Layer Atas?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingatasmerah" value="merah" name="groupmaskingatas">
                            <label class="form-check-label" for="inputmaskingatasmerah">Ya, warna merah</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingatasbiru" value="biru" name="groupmaskingatas">
                            <label class="form-check-label" for="inputmaskingatasbiru">Ya, warna biru</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingatashijau" value="hijau" name="groupmaskingatas">
                            <label class="form-check-label" for="inputmaskingatashijau">Ya, warna hijau</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingatas2" value="no" name="groupmaskingatas" checked="">
                            <label class="form-check-label" for="inputmaskingatas2">Tidak</label>
                        </div>

                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Masking Layer Bawah?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingbawahmerah" value="merah" name="groupmaskingbawah">
                            <label class="form-check-label" for="inputmaskingbawahmerah">Ya, warna merah</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingbawahbiru" value="biru" name="groupmaskingbawah">
                            <label class="form-check-label" for="inputmaskingbawahbiru">Ya, warna biru</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingbawahhijau" value="hijau" name="groupmaskingbawah">
                            <label class="form-check-label" for="inputmaskingbawahhijau">Ya, warna hijau</label>
                        </div><br>
                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputmaskingbawah2" value="no" name="groupmaskingbawah" checked="">
                            <label class="form-check-label" for="inputmaskingbawah2">Tidak</label>
                        </div><br>
                        <hr>


                        <h5 class="font-weight-normal mb-3"><strong>Silkscreen (Label Komponen)?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->

                        <div class="form-check custom-control">
                            <!-- <input type="radio" name="fruit" value="orange" id="orange">
                                    <label for="orange">orange</label-->
                            <input type="radio" class="form-check-input" id="inputsilkscreenputih" value="putih" name="groupsilkscreen">
                            <label class="form-check-label" for="inputsilkscreenputih">Ya, warna putih</label>
                        </div><br>

                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputsilkscreenhitam" value="hitam" name="groupsilkscreen">
                            <label class="form-check-label" for="inputsilkscreenhitam">Ya, warna hitam</label>
                        </div><br>

                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputsilkscreen2" value="no" name="groupsilkscreen" checked="">
                            <label class="form-check-label" for="inputsilkscreen2">Tidak</label>
                        </div><br>


                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>File Desain</strong> </h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputfile1" value="Software PCB" name="groupfile" checked="">
                            <label class="form-check-label" for="inputfile1">Software PCB (Eagle, Dip Trace, Gerber, dll)</label>
                        </div><br>

                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="inputfile2" value="pdf" name="groupfile">
                            <label class="form-check-label" for="inputfile2">PDF, CDR, AI, DXF, dll <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpdf"></i></label>
                        </div><br>

                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Bentuk PCB</strong> </h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="bentukpcb1" value="kotak" name="groupbentuk" checked="">
                            <label class="form-check-label" for="bentukpcb1">Kotak</label>
                        </div><br>

                        <!-- Group of default radios - option 2 -->
                        <div class="form-check custom-control">
                            <input type="radio" class="form-check-input" id="bentukpcb2" value="nonkotak" name="groupbentuk">
                            <label class="form-check-label" for="bentukpcb2">Selain kotak (custom) <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalbentuk"></i></label>
                        </div><br>


                        <hr>
                        <center><button type="button" id="hitung" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px; "> Hitung</button></center>

                        <!-- Modal -->
                        <div class="modal fade" id="summary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!--div class="modal-dialog modal-dialog-centered" role="document"-->
                            <div class="modal-dialog modal-notify modal-info" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="white-text" id="exampleModalLabel"><strong>SUMMARY</strong> </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="white-text">×</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <!--h5 id="tes">uuu</h5><br-->
                                        <!--h5 id="tes2">Silahkan cek kembali pesanan Anda:</h5-->
                                        <p id="tes1">ccc</p>
                                        <h5><b>Cara order PCB:</b></h5><br>
                                        <p>1. Copy-kan data di atas pada <b>catatan</b> order pada link berikut (pilih salah satu)<br>
                                            <a href="https://www.tokopedia.com/raftech/jasa-cetak-pcb-general" target="_blank">Tokopedia</a><br>
                                            <a href="https://www.bukalapak.com/p/elektronik/komponen-elektronik/3idj8kn-jual-cetak-pcb-general" target="_blank">Bukalapak</a><br>
                                            <a href="https://shopee.co.id/product/100172996/5842125187/" target="_blank">Shopee</a>
                                        </p>
                                        <div class="view overlay z-depth-1-half">
                                            <img src="images/raftech.jpg">
                                            <!-- <img src="images/catatan.png"> -->
                                        </div>
                                        <p></p>
                                        <p id="qty">2. Isikan jumlah pesanan sebanyak
                                        </p>
                                        <div class="view overlay z-depth-1-half">
                                            <img src="images/raftech.jpg" width="300" height="100">
                                            <!-- <img src="images/jumlah.png" width="300" height="100"> -->
                                        </div>
                                        <p></p>
                                        <p>3. Kirim file desain PCB Anda ke <b>raftechpcb@gmail.com</b> dengan subjek <b>No Invoice</b> dari Tokopedia/Bukalapak/Shopee
                                        </p>
                                        <div class="view overlay z-depth-1-half">
                                            <img src="images/raftech.jpg" width="300" height="300">
                                            <!-- <img src="images/email3.png" width="300" height="300"> -->
                                        </div>
                                        <p></p>
                                        <p>Jika Anda mengikuti prosedur di atas dengan benar maka orderan Anda akan semakin cepat diproses. Terima kasih</p>
                                        <p>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-md waves-effect waves-light" data-dismiss="modal" style="border-radius: 25px; ">Close</button>
                                        <!--button type="button" class="btn btn-primary">Save changes</button-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modaljalur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan Desain</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="images/produk4.jpg" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="modalvia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan lubang Via (Through Hole)</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="images/via2.jpg" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalpcb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tipe PCB</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="images/pcb.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalmasking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masking</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="images/masking2.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalpdf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">File Desain PDF</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="images/pdf2.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modaldouble" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan Cetak PCB Double Layer</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sementara ini baru bisa mencetak double layer dengan via/through hole khusus untuk jumper/sambungan layer atas dan bawah (belum bisa untuk kaki komponen)
                                        <center><img src="images/double.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Modal: modalRelatedContent-->
                        <!-- <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog modal-side modal-top-right modal-notify modal-info" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="heading">Related article</p>

                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="white-text">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).jpg" class="img-fluid" alt="">
                                            </div>

                                            <div class="col-7">
                                                <p><strong>My travel to paradise</strong></p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit [...]</p>
                                                <button type="button" class="btn btn-info btn-md waves-effect waves-light">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="w3-col m2">
                <br>
                <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                    <h5><strong>IKLAN</strong></h5>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container"><br>
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;"><br><br>
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container"><br>
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;"><br><br>
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container"><br>
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;"><br><br>
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container"><br>
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;"><br><br>
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </div>
    <br>

    <!-- <div id="page-wrapper">
        <div id="page-inner">
            <?php
            if (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "login")
                    include 'login.php';
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

    <!-- Footer -->
    <footer class="w3-container w3-theme-d5">
        <a>
            <p>RAFTECH-PCB</p>
        </a>
    </footer>

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