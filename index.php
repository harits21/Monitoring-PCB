<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Raftech-PCB</a>


            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-padding-large">
                    <img src="images/user1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
                    <!-- <span class="w3-badge w3-right w3-small w3-green">3</span> -->
                </button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href=" #" class="w3-bar-item w3-button">My Profile</a>
                    <a href="#" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>


            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="images/user1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </a> -->

        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
                        <p class="w3-center"><img src="images/user1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
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
                        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                        <div id="Demo1" class="w3-hide w3-container">
                            <p>Some text..</p>
                        </div>
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                        <div id="Demo2" class="w3-hide w3-container">
                            <p>Some other text..</p>
                        </div>
                        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br>
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Interests -->
                <div class="w3-card w3-round w3-white w3-hide-small">
                    <div class="w3-container">
                        <br>
                        <p><strong>Interests</strong> </p>
                        <p>
                            <span class="w3-tag w3-small w3-theme-d5">News</span>
                            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
                            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                            <span class="w3-tag w3-small w3-theme-d2">Games</span>
                            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                            <span class="w3-tag w3-small w3-theme">Games</span>
                            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                            <span class="w3-tag w3-small w3-theme-l2">Food</span>
                            <span class="w3-tag w3-small w3-theme-l3">Design</span>
                            <span class="w3-tag w3-small w3-theme-l4">Art</span>
                            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                        </p>
                    </div>
                </div>
                <br>

                <!-- Alert Box -->
                <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                        <i class="fa fa-remove"></i>
                    </span>
                    <p><strong>Hey!</strong></p>
                    <p>People are looking at your profile. Find out who.</p>
                </div>

                <!-- End Left Column -->
            </div>

            <!-- Middle Column -->
            <div class="w3-col m8">
                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <h2>
                        <center><strong>Perhitungan Biaya Cetak PCB</strong></center>
                    </h2><br>
                    <hr class="w3-clear">
                    <div class="card-header bg-primary text-white">
                        <h4><strong>Biaya Cetak PCB</strong> </h4>
                    </div>

                    <div class="card-body">

                        <!--Text-->
                        <p class="card-text">Mohon diisi sesuai dengan data sebenarnya. Kesalahan pengisian data dapat berakibat pada keterlambatan pemrosesan pesanan atau bahkan ditolak</p>
                        <p class="card-text"><b>Target pengerjaan</b>: 2 hari kerja (minggu/tgl merah tidak termasuk) untuk pcb non masking/silkscreen, 3 hari kerja untuk pcb dengan masking/silkscreen, 4 hari kerja untuk pcb double layer (jumlah pesanan di bawah 10 pcs).
                            Jika lebih dari 10 pcs, menyesuaikan beban kerja.</p>
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

                        <h5 class="font-weight-normal mb-3"><strong>Ukuran PCB</strong>
                            <!--i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalukuran"></i-->
                        </h5>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputpanjang" class="form-control" min="1">
                                    <label for="inputpanjang"><i>Panjang (cm)</i></label>
                                </div>
                            </div><br>
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputlebar" class="form-control" min="1">
                                    <label for="inputlebar"><i>Lebar (cm)</i></label>
                                </div>
                            </div>
                        </div>

                        <h5 class="font-weight-normal mb-3"><strong>Jumlah (Quantity)</strong> </h5>
                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="md-form">
                                    <input type="number" id="inputjumlah" class="form-control" min="1">
                                    <label for="inputjumlah"><i>pcs</i></label>
                                </div>
                            </div>

                        </div>

                        <h5 class="font-weight-normal mb-3"><strong>Layer</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputlayersingle" value="single" name="grouplayer" checked="">
                            <label class="custom-control-label" for="inputlayersingle">Single</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputlayerdouble" value="double" name="grouplayer">
                            <label class="custom-control-label" for="inputlayerdouble">Double
                                <!--i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modaldouble"></i-->
                            </label>
                        </div>
                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Tipe PCB</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" value="fr2" name="grouppcb" checked="">
                            <label class="custom-control-label" for="defaultGroupExample1">FR2 (Pertinaks) </label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="defaultGroupExample2" value="fr4" name="grouppcb">
                            <label class="custom-control-label" for="defaultGroupExample2">FR4 (Fiber)</label>
                        </div>


                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Masking Layer Atas?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingatasmerah" value="merah" name="groupmaskingatas">
                            <label class="custom-control-label" for="inputmaskingatasmerah">Ya, warna merah</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingatasbiru" value="biru" name="groupmaskingatas">
                            <label class="custom-control-label" for="inputmaskingatasbiru">Ya, warna biru</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingatashijau" value="hijau" name="groupmaskingatas">
                            <label class="custom-control-label" for="inputmaskingatashijau">Ya, warna hijau</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingatas2" value="no" name="groupmaskingatas" checked="">
                            <label class="custom-control-label" for="inputmaskingatas2">Tidak</label>
                        </div>

                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Masking Layer Bawah?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingbawahmerah" value="merah" name="groupmaskingbawah">
                            <label class="custom-control-label" for="inputmaskingbawahmerah">Ya, warna merah</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingbawahbiru" value="biru" name="groupmaskingbawah">
                            <label class="custom-control-label" for="inputmaskingbawahbiru">Ya, warna biru</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingbawahhijau" value="hijau" name="groupmaskingbawah">
                            <label class="custom-control-label" for="inputmaskingbawahhijau">Ya, warna hijau</label>
                        </div>



                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputmaskingbawah2" value="no" name="groupmaskingbawah" checked="">
                            <label class="custom-control-label" for="inputmaskingbawah2">Tidak</label>
                        </div>
                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Silkscreen (Label Komponen)?</strong> <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                        <!-- Group of default radios - option 1 -->

                        <div class="custom-control custom-radio">
                            <!-- <input type="radio" name="fruit" value="orange" id="orange">
                                    <label for="orange">orange</label-->
                            <input type="radio" class="custom-control-input" id="inputsilkscreenputih" value="putih" name="groupsilkscreen">
                            <label class="custom-control-label" for="inputsilkscreenputih">Ya, warna putih</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputsilkscreenhitam" value="hitam" name="groupsilkscreen">
                            <label class="custom-control-label" for="inputsilkscreenhitam">Ya, warna hitam</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputsilkscreen2" value="no" name="groupsilkscreen" checked="">
                            <label class="custom-control-label" for="inputsilkscreen2">Tidak</label>
                        </div>
                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>File Desain</strong> </h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputfile1" value="Software PCB" name="groupfile" checked="">
                            <label class="custom-control-label" for="inputfile1">Software PCB (Eagle, Dip Trace, Gerber, dll)</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="inputfile2" value="pdf" name="groupfile">
                            <label class="custom-control-label" for="inputfile2">PDF, CDR, AI, DXF, dll <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpdf"></i></label>
                        </div>

                        <hr>
                        <h5 class="font-weight-normal mb-3"><strong>Bentuk PCB</strong> </h5>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="bentukpcb1" value="kotak" name="groupbentuk" checked="">
                            <label class="custom-control-label" for="bentukpcb1">Kotak</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="bentukpcb2" value="nonkotak" name="groupbentuk">
                            <label class="custom-control-label" for="bentukpcb2">Selain kotak (custom) <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalbentuk"></i></label>
                        </div>


                        <hr>
                        <center><button type="button" id="hitung" class="btn btn-primary btn-md waves-effect waves-light" style="border-radius: 25px; ">Hitung</button></center>

                        <!-- Modal -->
                        <div class="modal fade" id="summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!--div class="modal-dialog modal-dialog-centered" role="document"-->
                            <div class="modal-dialog modal-notify modal-info" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="white-text" id="exampleModalLabel">SUMMARY</h5>
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
                                            <img src="img/catatan.png">
                                        </div>
                                        <p></p>
                                        <p id="qty">2. Isikan jumlah pesanan sebanyak
                                        </p>
                                        <div class="view overlay z-depth-1-half">
                                            <img src="img/jumlah.png" width="300" height="100">
                                        </div>
                                        <p></p>
                                        <p>3. Kirim file desain PCB Anda ke <b>raftechpcb@gmail.com</b> dengan subjek <b>No Invoice</b> dari Tokopedia/Bukalapak/Shopee
                                        </p>
                                        <div class="view overlay z-depth-1-half">
                                            <img src="img/email3.png" width="300" height="300">
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
                        <div class="modal fade" id="modaljalur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan desain</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="img/jalur3.jpg" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalvia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan lubang Via (Through Hole)</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="img/via2.jpg" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalpcb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tipe PCB</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="img/pcb.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalmasking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masking</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="img/masking2.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalpdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">File Desain PDF</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="img/pdf2.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modaldouble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ketentuan Cetak PCB Double Layer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Sementara ini baru bisa mencetak double layer dengan via/through hole khusus untuk jumper/sambungan layer atas dan bawah (belum bisa untuk kaki komponen)
                                        <center><img src="img/double.png" class="img-fluid" alt=""></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Modal: modalRelatedContent-->
                        <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog modal-side modal-top-right modal-notify modal-info" role="document">
                                <!--Content-->
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <p class="heading">Related article</p>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="white-text">×</span>
                                        </button>
                                    </div>

                                    <!--Body-->
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="w3-col m2">
                <br>
                <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                    <p><strong>IKLAN</strong></p>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;">
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;">
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;">
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>

                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p><strong>IKLAN</strong></p>
                        <img src="images/1.jpg" style="width:100%;">
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

    <!-- Footer -->
    <footer class="w3-container w3-theme-d5">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>



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