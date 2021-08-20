<h2>Order</h2>
<table>
    <tr>
        <th>no.order</th>
        <th>nama kustomer</th>
        <th>tgl. order</th>
        <th>jam</th>
        <th>status</th>
        <th>Bukti TF</th>
    </tr>";
    $tampil = mysql_query("SELECT * FROM orders, kustomer
    WHERE orders.id_kustomer=kustomer.id_kustomer ORDER BY id_orders DESC LIMIT 6");
    while($r=mysql_fetch_array($tampil)){
    $tanggal=tgl_indo($r[tgl_order]);
    echo "<tr>
        <td align=center>$r[id_orders]</td>
        <td>$r[nama_lengkap]</td>
        <td>$tanggal</td>
        <td>$r[jam_order]</td>
        <td>$r[status_order]</td>
        <td align=center> : <img src=../foto_banner/$r[gambar]></td>
    </tr>
    ";
    $no++;
    }
    }

    }