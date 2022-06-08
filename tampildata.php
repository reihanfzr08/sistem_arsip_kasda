<?php include "header.php"; ?>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">


                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <center><h1>Data Pengarsipan SP2D</h1><center>

                </div>
            </nav>
            <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
    margin: auto;
    font-family: "Arial";
    font-size: 14px;
    border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 80%;
 
}
table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

 
/*Tabel Responsive 1*/
.table-container {
    overflow: auto;
}
    </style>


            <?php include "koneksi.php"; ?>
             <a href="beranda.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Kembali</a><br><br>
            <a href="tambahdata.php" class="btn btn-primary btn-md mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
        <form method="GET" action="tampildata.php" style="text-align: right;">
        <label>Cari Data : </label>
        <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
        <button type="submit">Cari</button>
    </form>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <table border="1">  
    <thead>
        <tr>
            <th>No.</th>
            <th>SKPD</th>
            <th>NO SP2D</th>
            <th>Tanggal SP2D</th>
            <th>Uraian</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   if(isset($_GET['kata_cari'])) {
                    $kata_cari = $_GET['kata_cari'];
    
                    $serc = "SELECT * FROM kasda WHERE SKPD like '%".$kata_cari."%' OR No_SP2D like '%".$kata_cari."%' OR Uraian like '%".$kata_cari."%' OR Tanggal_SP2D like '%".$kata_cari."%' ORDER BY id asc";
                } else {
                    $serc="SELECT * FROM kasda ORDER BY id asc";
                }
                

                $query = mysqli_query($koneksi, $serc);
                if(!$query) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }

   $no=1;
   
   while ($result=mysqli_fetch_assoc($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                <td>
                    <?php echo $result['SKPD']; ?>
                </td>
                <td>
                    <?php echo $result['No_SP2D']; ?>
                </td>
                <td>
                    <?php echo $result['Tanggal_SP2D']; ?>
                </td>
                <td>
                    <?php echo $result['Uraian']; ?>
                </td>
                 <td>Rp.
                    <?php echo number_format($result['Jumlah'],0,',','.'); ?>
                </td>
                <td>
                <a href="editdata.php?id=<?php echo $result['id']; ?>"class="btn btn-sm btn-warning">Edit</a> |
              <a href="delete_data.php?id=<?php echo $result['id']; ?> "class="btn btn-sm btn-danger" " onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
              </td>
          
    </td>
    </tr>
     <?php

   }
  ?>
    </tbody>
                
    </table>

</div>
        <?php include "footer.php"; ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>