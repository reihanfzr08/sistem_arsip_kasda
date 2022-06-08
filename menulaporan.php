 <form class="form-horizontal form-label-left" method="post" onsubmit="popup(this);" target="_blank" method="post" action="laporan.php" >
<?php
echo "<script>
function popup(form) {
 window.open('', 'cetak', 'menubar=yes,scrollbars=yes,resizable=yes,width=800,height=400,top=50,left=200');
 form.target = 'cetak';
}
</script>";
?>
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
                </div>
            </nav>
            <center><h3> Laporan Data Pengarsipan SP2D KBB </h3></center><br><br>
             <h6> Lihat dan Unduh Laporan Arsip SP2D KBB dibawah ini: </h6>
            <button type="submit" name="cetak" class="btn btn-primary btn-sm"><a href="laporan.php"></a><i class="fa fa-print"></i>Cetak</button>
            <a href="tampildata.php" class="form-inline my-2 my-lg-0 btn btn-success">Kelola Data</a>
        </div>
    </form>
<style type="text/css">
      h3 {
        font-family: "Trebuchet MS";
      }
  </style>
    

<?php include "footer.php"; ?>