<?php include "header.php"; ?>
<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>

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
                    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-danger" onclick="return confirm('Yakin ingin keluar ?')">Keluar</a>
                </div>
            </nav>
            <?php include "koneksi.php"; ?>
            <marquee><strong><em>Selamat Datang di Dashboard Sistem Informasi Arsip Kas Daerah</marquee>
            <div class="card text-center">
                <div class="card-header bg-info text-white">BKAD KABUPATEN BANDUNG BARAT</div>
<main role="main" class="container">

  <div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
    <p class="lead">Selamat Bekerja dan Beraktivitas !</p>
  </div>

</main><!-- /.container -->
                <div class="card-body">
            <div class="text-center">
                <img src="kbb (2).png" width="20%">
                <h5 class="mt-3">SISTEM INFORMASI ARSIP KAS DAERAH</h5>
            </div>
            </div>
    </div>

<?php include "footer.php"; ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>