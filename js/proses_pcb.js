function secondsToHMS(secs) {
    function z(n){return (n<10?'0':'') + n;}
    var sign = secs < 0? '-':'';
    secs = Math.abs(secs);
    return sign + z(secs/3600 |0) + ':' + z((secs%3600) / 60 |0) + ':' + z(secs%60);
}

function hmsToSeconds(s) {
    var b = s.split(':');
    return b[0]*3600 + b[1]*60 + (+b[2] || 0);
}

// Dropdown
function cek_db() {
    var id_in = $('#id_in').val();
    $.ajax({
        url: 'cek_db.php',
        data: "id_in=" + id_in,
    }).success(function(data) {
        var json = data,
            obj = JSON.parse(json);
        $('#spec').val(obj.spec_pcb);
        $('#jumlah').val(obj.jumlah);
        if(obj.start_verif!=null){
            $('#startV').attr("disabled",true);
        } else {
            $('#startV').attr("disabled",false);
        } if (obj.stop_verif!=null){
            $('#stopV').attr("disabled",true);
        } else {
            $('#stopV').attr("disabled",false);
        } if (obj.start_potong!=null){
            $('#startP').attr("disabled",true);
        } else {
            $('#startP').attr("disabled",false);
        } if(obj.stop_potong!=null){
            $('#stopP').attr("disabled",true);
        } else {
            $('#stopP').attr("disabled",false);
        } if(obj.start_ctk_bawah!=null){
            $('#startCB').attr("disabled",true);
        } else {
            $('#startCB').attr("disabled",false);
        } if(obj.stop_ctk_bawah!=null) {
            $('#stopCB').attr("disabled",true);
        } else {
            $('#stopCB').attr("disabled",false);
        } if (obj.start_ctk_atas!=null) {
            $('#startCA').attr("disabled",true);
        } else {
            $('#startCA').attr("disabled",false);
        } if(obj.stop_ctk_atas!=null) {
            $('#stopCA').attr("disabled",true);
        } else {
            $('#stopCA').attr("disabled",false);
        } if(obj.start_masking_bawah!=null) {
            $('#startMB').attr("disabled",true);
        } else {
            $('#startMB').attr("disabled",false);
        } if (obj.stop_masking_bawah!=null) {
            $('#stopMB').attr("disabled",true);
        } else {
            $('#stopMB').attr("disabled",false);
        } if (obj.start_masking_atas!=null) {
            $('#startSA').attr("disabled",true);
        } else {
            $('#startSA').attr("disabled",false);
        } if(obj.stop_masking_bawah!=null) {
            $('#stopSA').attr("disabled",true);
        } else {
            $('#stopSA').attr("disabled",false);
        } if(obj.start_silk_bawah!=null) {
            $('#startSB').attr("disabled",true);
        } else {
            $('#startSB').attr("disabled",false);
        } if(obj.stop_silk_bawah!=null) {
            $('#stopSB').attr("disabled",true);
        } else {
            $('#stopSB').attr("disabled",false);
        } if(obj.start_silk_atas!=null) {
            $('#startSA').attr("disabled",true);
        } else {
            $('#startSA').attr("disabled",false);
        } if(obj.stop_silk_atas!=null) {
            $('#stopSA').attr("disabled",true);
        } else {
            $('#stopSA').attr("disabled",false);
        } if(obj.start_bor!=null) {
            $('#startB').attr("disabled",true);
        } else {
            $('#startB').attr("disabled",false);
        } if(obj.stop_bor!=null) {
            $('#stopB').attr("disabled",true);
        } else {
            $('#stopB').attr("disabled",false);
        } if(obj.start_plating!=null) {
            $('#startPLT').attr("disabled",true);
        } else {
            $('#startPLT').attr("disabled",false);
        } if(obj.stop_plating!=null) {
            $('#stopPLT').attr("disabled",true);
        } else {
            $('#stopPLT').attr("disabled",false);
        } if(obj.start_finishing!=null) {
            $('#startF').attr("disabled",true);
        } else {
            $('#startF').attr("disabled",false);
        } if(obj.stop_finishing!=null) {
            $('#stopF').attr("disabled",true);
        } else {
            $('#stopF').attr("disabled",false);
        } if(obj.start_qc!=null) {
            $('#startQC').attr("disabled",true);
        } else {
            $('#startQC').attr("disabled",false);
        } if(obj.stop_qc!=null) {
            $('#stopQC').attr("disabled",true);
        } else {
            $('#stopQC').attr("disabled",false);
        } if(obj.start_packing!=null) {
            $('#startPCK').attr("disabled",true);
        } else {
            $('#startPCK').attr("disabled",false);
        } if(obj.stop_packing!=null) {
            $('#stopPCK').attr("disabled",true);
        } else {
            $('#stopPCK').attr("disabled",false);
        }
    });
}

// start order
function start_order(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_verif = n;
    $('#date').val(start_verif);
    var data = $('.aksi').serialize();
    $('#startV').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'save_order.php',
        data: data,
    });
}

// Stop Order
function stop_order(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_verif = n;
    var a = new Date($('#date').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasi_v').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date2').val(stop_verif);
    var data = $('.aksi').serialize();
    $('#stopV').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_order.php',
        data: data,
    });
}

// Start Potong PCB
function start_potong(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_potong = n;
    $('#date_p').val(start_potong);
    var data = $('.aksi').serialize();
    $('#startP').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_potong.php',
        data: data,
    });
}

// Stop Potong
function stop_potong(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_potong = n;
    var a = new Date($('#date_p').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiP').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_potong2').val(stop_potong);
    var data = $('.aksi').serialize();
    $('#stopP').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_potong.php',
        data: data,
    });
}

// Start cetak bawah
function start_ctkb(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_ctkb = n;
    $('#date_ctkb').val(start_ctkb);
    var data = $('.aksi').serialize();
    $('#startCB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_ctkb.php',
        data: data,
    });
}

// Stop cetak bawah
function stop_ctkb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ctkb = n;
    var a = new Date($('#date_ctkb').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiCB').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_ctkb2').val(stop_ctkb);
    var data = $('.aksi').serialize();
    $('#stopCB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_ctkb.php',
        data: data,
    });
}

// Start cetak atas
function start_ctka() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_ctka = n;
    $('#date_ctka').val(start_ctka);
    var data = $('.aksi').serialize();
    $('#startCA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_ctka.php',
        data: data,
    });
}

// Stop cetak atas
function stop_ctka() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ctka = n;
    var a = new Date($('#date_ctka').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiCA').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_ctka2').val(stop_ctka);
    var data = $('.aksi').serialize();
    $('#stopCA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_ctka.php',
        data: data,
    });
}

// Start masking bawah
function start_mb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_mb = n;
    $('#date_mb').val(start_mb);
    var data = $('.aksi').serialize();
    $('#startMB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_mb.php',
        data: data,
    });
}

// Stop masking bawah
function stop_mb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_mb = n;
    var a = new Date($('#date_mb').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiMB').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_mb2').val(stop_mb);
    var data = $('.aksi').serialize();
    $('#stopMB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_mb.php',
        data: data,
    });
}

// Start masking atas
function start_ma() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ma = n;
    $('#date_ma').val(stop_ma);
    var data = $('.aksi').serialize();
    $('#startMA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_ma.php',
        data: data,
    });
}

// Stop masking atas
function stop_ma() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ma = n;
    var a = new Date($('#date_ma').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiMA').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_ma2').val(stop_ma);
    var data = $('.aksi').serialize();
    $('#stopMA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_ma.php',
        data: data,
    });
}

// Start silkscreen bawah
function start_sb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_sb = n;
    $('#date_sb').val(start_sb);
    var data = $('.aksi').serialize();
    $('#startSB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_sb.php',
        data: data,
    });
}

// Stop silkscreen bawah
function stop_sb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_sb = n;
    var a = new Date($('#date_sb').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiSB').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_sb2').val(stop_sb);
    var data = $('.aksi').serialize();
    $('#stopSB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_sb.php',
        data: data,
    });
}

// Start silkscreen atas
function start_sa() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_sa = n;
    $('#date_sa').val(start_sa);
    var data = $('.aksi').serialize();
    $('#startSA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_sa.php',
        data: data,
    });
}

// Stop silkscreen atas
function stop_sa() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_sa = n;
    var a = new Date($('#date_sa').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiSA').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_sa2').val(stop_sa);
    var data = $('.aksi').serialize();
    $('#stopSA').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_sa.php',
        data: data,
    });
}

// Start bor
function start_bor() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_bor = n;
    $('#date_bor').val(start_bor);
    var data = $('.aksi').serialize();
    $('#startB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_bor.php',
        data: data,
    });
}

// Stop bor
function stop_bor() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_bor = n;
    var a = new Date($('#date_bor').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiB').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_bor2').val(stop_bor);
    var data = $('.aksi').serialize();
    $('#stopB').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_bor.php',
        data: data,
    });
}

// Start plating
function start_plat() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_plat = n;
    $('#date_plat').val(start_plat);
    var data = $('.aksi').serialize();
    $('#startPLT').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_plat.php',
        data: data,
    });
}

// Stop plating
function stop_plat() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_plat = n;
    var a = new Date($('#date_plat').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiPLT').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_plat2').val(stop_plat);
    var data = $('.aksi').serialize();
    $('#stopPLT').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_plat.php',
        data: data,
    });
}

// Start finishing
function start_fi() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_fi = n;
    $('#date_fi').val(start_fi);
    var data = $('.aksi').serialize();
    $('#startF').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_fi.php',
        data: data,
    });
}

// Stop finishing
function stop_fi() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_fi = n;
    var a = new Date($('#date_fi').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiF').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_fi2').val(stop_fi);
    var data = $('.aksi').serialize();
    $('#stopF').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_fi.php',
        data: data,
    });
}

// Start quality control
function start_qc() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_qc = n;
    $('#date_qc').val(start_qc);
    var data = $('.aksi').serialize();
    $('#startQC').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_qc.php',
        data: data,
    });
}

// Stop quality control
function stop_qc() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_qc = n;
    var a = new Date($('#date_qc').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiQC').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_qc2').val(stop_qc);
    var data = $('.aksi').serialize();
    $('#stopQC').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_qc.php',
        data: data,
    });
}

// Start packing
function start_pack() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_pack = n;
    $('#date_pack').val(start_pack);
    var data = $('.aksi').serialize();
    $('#startPCK').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'start_pack.php',
        data: data,
    });
}

// Stop packing
function stop_pack() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_pack = n;
    var a = new Date($('#date_pack').val());
    var duration = ((secondsToHMS(hmsToSeconds(d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()) - hmsToSeconds(a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds()))));
    $('#durasiPCK').val(duration.charAt(0) + duration.charAt(1) + " Jam " + duration.charAt(3) + duration.charAt(4) + " Menit " + duration.charAt(6) + duration.charAt(7) + " Detik");
    $('#date_pack2').val(stop_pack);
    var data = $('.aksi').serialize();
    $('#stopPCK').attr("disabled",true);
    $.ajax({
        type: 'POST',
        url: 'stop_pack.php',
        data: data,
    });
}
