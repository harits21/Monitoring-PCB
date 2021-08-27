<?php
include '_templateKaryawan.php';
include 'koneksi.php';
?>
<style>
    .table tr {
        cursor: pointer;
    }

    .table {
        background-color: #fff !important;
    }

    .hedding h1 {
        color: #fff;
        font-size: 25px;
    }

    .main-section {
        margin-top: 120px;
    }

    .hiddenRow {
        padding: 0 4px !important;
        background-color: #eeeeee;
        font-size: 13px;
    }

    .accordian-body span {
        color: #a2a2a2 !important;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <br>
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">No.Invoice</th>
                            <th rowspan="2">Spec PCB</th>
                            <th rowspan="2">Jumlah</th>
                            <th colspan="4">Order Verified</th>
                            <th colspan="4">Potong PCB</th>
                            <th colspan="4">Cetak jlr bwh</th>
                            <th colspan="4">Cetak jlr atas</th>
                            <th colspan="4">Masking Bawah</th>
                            <th colspan="4">Masking Atas</th>
                            <th colspan="4">Silkscreen bawah</th>
                        </tr>
                        <tr>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                            <td><b>Start</b></td>
                            <td><b>Stop</b></td>
                            <td><b>Durasi</b></td>
                            <td><b>PIC</b></td>
                        </tr>
                    </thead>

                    <?php
                    $nomor = 1;
                    $ambil = mysqli_query($koneksi, "SELECT * FROM order_masuk, order_verified, potong_pcb, ctk_jalur_bawah,ctk_jalur_atas, masking_bawah, masking_atas, silkscreen_bawah, silkscreen_atas, bor, plating, finishing, qc, packing WHERE order_verified.no_invoice = order_masuk.no_invoice AND potong_pcb.no_invoice = order_masuk.no_invoice AND ctk_jalur_bawah.no_invoice = order_masuk.no_invoice AND ctk_jalur_atas.no_invoice = order_masuk.no_invoice AND masking_bawah.no_invoice = order_masuk.no_invoice AND masking_atas.no_invoice = order_masuk.no_invoice AND silkscreen_bawah.no_invoice = order_masuk.no_invoice AND silkscreen_atas.no_invoice = order_masuk.no_invoice AND bor.no_invoice = order_masuk.no_invoice AND plating.no_invoice = order_masuk.no_invoice AND finishing.no_invoice = order_masuk.no_invoice AND qc.no_invoice = order_masuk.no_invoice AND packing.no_invoice = order_masuk.no_invoice");
                    while ($data = $ambil->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr colspan="6" data-toggle="collapse" data-target="#demo<?php echo $nomor ?>" class="accordion-toggle">
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $data['nama_customer']; ?></td>
                                <td><?php echo $data['no_invoice']; ?></td>
                                <td><?php echo $data['spec_pcb']; ?></td>
                                <td><?php echo $data['jumlah']; ?></td>
                                <td><?php echo $date1 =  $data['start_verif']; ?></td>
                                <td><?php echo $date2 =  $data['stop_verif']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                <td><?php echo $data['nama_karyawanV']; ?></td>
                                <td><?php echo $date1 =  $data['start_potong']; ?></td>
                                <td><?php echo $date2 =  $data['stop_potong']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                <td><?php echo $data['nama_karyawanP']; ?></td>
                                <td><?php echo $date1 =  $data['start_ctk_bawah']; ?></td>
                                <td><?php echo $date2 =  $data['stop_ctk_bawah']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik'); ?></td>
                                <td><?php echo $data['nama_karyawanCB']; ?></td>
                                <td><?php echo $date1 = $data['start_ctk_atas']; ?></td>
                                <td><?php echo $date2 = $data['stop_ctk_atas']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                <td><?php echo $data['nama_karyawanCA'] ?></td>
                                <td><?php echo $date1 = $data['start_masking_bawah']; ?></td>
                                <td><?php echo $date2 = $data['stop_masking_bawah']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                <td><?php echo $data['nama_karyawanMB'] ?></td>
                                <td><?php echo $date1 = $data['start_masking_atas']; ?></td>
                                <td><?php echo $date2 = $data['stop_masking_atas']; ?></td>
                                <?php
                                $datetime1 = new DateTime($date1);
                                $datetime2 = new DateTime($date2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                <td><?php echo $data['nama_karyawanMA'] ?></td>
                                <td><?php echo $dateSB = $data['start_silk_bawah']; ?></td>
                                <td><?php echo $dateSB2 = $data['stop_silk_bawah']; ?></td>
                                <?php
                                $datetime1 = new DateTime($dateSB);
                                $datetime2 = new DateTime($dateSB2);
                                $interfal = $datetime1->diff($datetime2);
                                ?>
                                <td><?php echo $interfal->format('%H Jam %i Menit %s Detik') ?></td>
                                <td><?php echo $data['nama_karyawanSB']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="33" class="hiddenRow">
                                    <div class="accordian-body collapse p-3" id="demo<?php echo $nomor ?>">
                                        <p>Silkscreen Atas : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_silk_atas'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_silk_atas'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanSA'] ?></span> </p>
                                        <p>Bor : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_bor'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_bor'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanB'] ?></span> </p>
                                        <p>Plating : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_plating'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_plating'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanPLT'] ?></span> </p>
                                        <p>Finishing : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_finishing'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_finishing'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanF'] ?></span> </p>
                                        <p>QC : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_qc'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_qc'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanQC'] ?></span> </p>
                                        <p>Packing : <span></span></p>
                                        <p>Start : <span><?php echo $data['start_packing'] ?></span> </p>
                                        <p>Stop : <span><?php echo $data['stop_packing'] ?></span> </p>
                                        <p>Durasi : <span>X</span> </p>
                                        <p>PIC : <span><?php echo $data['nama_karyawanPCK'] ?></span> </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                        $nomor++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $('.accordion-toggle').click(function() {
        $('.hiddenRow').hide();
        $(this).next('tr').find('.hiddenRow').show();
    });
</script>