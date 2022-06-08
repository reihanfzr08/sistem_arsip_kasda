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
                   <center><h2>Edit Data SP2D<h2><center>
                </div>
            </nav>

                <?php
                include('koneksi.php');

                $id = $_GET['id']; 
                $query = mysqli_query($koneksi, "SELECT * from kasda where id = '$id'");
                $row = mysqli_fetch_assoc($query);

                ?>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <?php include "koneksi.php"; ?>
            <form action="edit_aksi.php" method="post" id="formadd">

                <label for="SKPD">SKPD</label><br/> 
                 <input type="hidden" name="id" id="id" required="" value="<?= $row['id']; ?>" />
                <select id="SKPD" name="SKPD" class="form-select" value="<?= $row['SKPD']; ?>" required="">
                    <option value="" disabled selected>Pilih Satuan Kerja Perangkat Daerah</option>
                    <option value="Badan Keuangan Aset Daerah">Badan Keuangan Aset Daerah </option>
                    <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                    <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                    <option value="Sekretariat Daerah">Sekretariat Daerah</option>
                    <option value="Badan Pendapatan Daerah">Badan Pendapatan Daerah</option>
                </select><br/>


                <label for="No_SP2D">No SP2D</label>
                <input type="text" id="No_SP2D" name="No_SP2D" class="form-control" value="<?= $row['No_SP2D']; ?>" required=""><br/>

                <label for="Tanggal_SP2D">Tanggal SP2D</label>   
                <input type="date" id="Tanggal_SP2D" name="Tanggal_SP2D" class="form-control" value="<?= $row['Tanggal_SP2D']; ?>" required=""><br/>

                <label for="Uraian">Uraian</label>   
                <input type="text" id="Uraian" name="Uraian" class="form-control" value="<?= $row['Uraian']; ?>" required=""><br/>

                <label for="Jumlah">Jumlah</label>   
                <input type="numeric" id="Jumlah" name="Jumlah" class="form-control" value="<?= $row['Jumlah']; ?>" required=""><br/>

                <input class="btn btn-success mt-3" type="submit" name="submit" value="Edit Data"><br><br>
                <a href="tampildata.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>


    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h2 {
        text-transform: uppercase;
        color: salmon;
      }
  </style>

<?php include "footer.php"; ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>