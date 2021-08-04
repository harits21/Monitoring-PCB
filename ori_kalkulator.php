<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Biaya Cetak PCB</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
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
</head>

<body>


    <!--button class="btn peach-gradient">Peach</button>
<button class="btn purple-gradient">Purple</button>
<button class="btn blue-gradient">Blue</button>
<button class="btn aqua-gradient">Aqua</button-->



    <!-- Card deck >
<div class="card-deck"-->
    <p></p>

    <!-- Card -->
    <div class="col-sm-6 mb-3 mb-md-0">
        <div class="card mb-4">

            <!--Card image-->
            <!--div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div-->
            <div class="card-header bg-primary text-white">
                <h4>Biaya Cetak PCB</h4>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Title-->

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

                <h5 class="font-weight-normal mb-3">Ukuran PCB
                    <!--i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalukuran"></i-->
                </h5>
                <div class="form-row mb-4">
                    <div class="col">
                        <div class="md-form">
                            <input type="number" id="inputpanjang" class="form-control" min="1">
                            <label for="inputpanjang">Panjang (cm)</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form">
                            <input type="number" id="inputlebar" class="form-control" min="1">
                            <label for="inputlebar">Lebar (cm)</label>
                        </div>
                    </div>
                </div>

                <h5 class="font-weight-normal mb-3">Jumlah (Quantity)</h5>
                <div class="form-row mb-4">
                    <div class="col">
                        <div class="md-form">
                            <input type="number" id="inputjumlah" class="form-control" min="1">
                            <label for="inputjumlah">pcs</label>
                        </div>
                    </div>

                </div>





                <h5 class="font-weight-normal mb-3">Layer <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
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
                <h5 class="font-weight-normal mb-3">Tipe PCB <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalpcb"></i></h5>
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
                <h5 class="font-weight-normal mb-3">Masking Layer Atas? <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
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

                <!--div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingataskuning" value="kuning" name="groupmaskingatas">
  <label class="custom-control-label" for="inputmaskingataskuning">Ya, warna kuning</label>
</div-->

                <!--div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingatashitam" value="hitam" name="groupmaskingatas">
  <label class="custom-control-label" for="inputmaskingatashitam">Ya, warna hitam</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingatasputih" value="putih" name="groupmaskingatas">
  <label class="custom-control-label" for="inputmaskingatasputih">Ya, warna putih</label>
</div-->

                <!-- Group of default radios - option 2 -->
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="inputmaskingatas2" value="no" name="groupmaskingatas" checked="">
                    <label class="custom-control-label" for="inputmaskingatas2">Tidak</label>
                </div>

                <hr>
                <h5 class="font-weight-normal mb-3">Masking Layer Bawah? <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
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

                <!--div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingbawahkuning" value="kuning" name="groupmaskingbawah">
  <label class="custom-control-label" for="inputmaskingbawahkuning">Ya, warna kuning</label>
</div-->

                <!--div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingbawahhitam" value="hitam" name="groupmaskingbawah">
  <label class="custom-control-label" for="inputmaskingbawahhitam">Ya, warna hitam</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="inputmaskingbawahputih" value="putih" name="groupmaskingbawah">
  <label class="custom-control-label" for="inputmaskingbawahputih">Ya, warna putih</label>
</div-->

                <!-- Group of default radios - option 2 -->
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="inputmaskingbawah2" value="no" name="groupmaskingbawah" checked="">
                    <label class="custom-control-label" for="inputmaskingbawah2">Tidak</label>
                </div>
                <hr>
                <h5 class="font-weight-normal mb-3">Silkscreen (Label Komponen)? <i class="fa fa-question-circle" style="font-size:18px;color:red" data-toggle="modal" data-target="#modalmasking"></i></h5>
                <!-- Group of default radios - option 1 -->

                <div class="custom-control custom-radio">
                    <!--input type="radio" name="fruit" value="orange" id="orange">
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
                <h5 class="font-weight-normal mb-3">File Desain </h5>
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
                <h5 class="font-weight-normal mb-3">Bentuk PCB </h5>
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

            </div>

        </div>
    </div>
    <!-- Card -->







    <!--/div>
<!-- Card deck -->





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
    <div class="modal fade" id="modalukuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ketentuan Ukuran PCB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center><img src="img/ukuran.png" class="img-fluid" alt=""></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md waves-effect waves-light" style="border-radius: 25px;" data-dismiss="modal">Close</button>

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
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: modalRelatedContent-->


    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>




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
    <div class="hiddendiv common"></div>
</body>

</html>