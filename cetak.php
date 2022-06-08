<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "arsip";

$koneksi = mysqli_connect($host,$user,$pass,$db);
$sql1 = "SELECT * FROM kasda";
$q1 = mysqli_query($koneksi,$sql1);
?>

<style>
    th{
        color: #333333;
        font-weight: bold;
    }
    table{
        border-collapse: collapse;
        width: 100%;
    }
    p{
        text-align: center;
        font-weight: bold;
    }
</style>


<p>ARSIP<br>
SURAT PERINTAH PENCAIRAN DANA
</p>


<table border="1">
    <thead>
        <tr>
            <th style="width:20%">SKPD</th>
            <th style="width:20%">NO SP2D</th>
            <th style="width:10%">Tanggal SP2D</th>
            <th style="width:20%">Uraian</th>
            <th style="width:20%">Jumlah</th>
        </tr>
        <tr>
            <th style="width:5%; background:#dedede;">1</th>
            <th style="width:20%; background:#dedede;">2</th>
            <th style="width:20%; background:#dedede;">3</th>
            <th style="width:20%; background:#dedede;">4</th>
            <th style="width:20%; background:#dedede;">5</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($r1 = mysqli_fetch_assoc($q1)) {
            ?>
            <tr>
                <td style="width:20%; text-align:center;"><?php echo $r1['SKPD'] ?></td>
                <td style="width:20%; text-align:center;"><?php echo $r1['No_SP2D'] ?></td>
                <td style="width:20%; text-align:center;"><?php echo $r1['Tanggal_SP2D'] ?></td>
                <td style="width:20%; text-align:center;"><?php echo $r1['Uraian'] ?></td>
                <td style="width:20%; text-align:center;"><?php echo $r1['Jumlah'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<script>
    window.print()
</script>
