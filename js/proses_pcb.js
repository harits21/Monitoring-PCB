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
    });
}

// start order
function start_order(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_verif = n;
    $('#date').val(start_verif);
    var data = $('.aksi').serialize();
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
    $('#date2').val(stop_verif);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_order.php',
        data: data,
    });
}
