<?php 
include "header.php"; 
include "koneksi.php";

    $SKPD=$_POST["SKPD"];
    $No_SP2D=$_POST["No_SP2D"];
    $Tanggal_SP2D=$_POST["Tanggal_SP2D"];
    $Uraian=$_POST["Uraian"];
    $Jumlah=$_POST["Jumlah"];    

    $query = mysqli_query($koneksi, "INSERT INTO kasda(SKPD, No_SP2D, Tanggal_SP2D, Uraian, Jumlah) VALUES('$SKPD', '$No_SP2D', '$Tanggal_SP2D', '$Uraian', '$Jumlah')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    

   header("location:tampildata.php");

    ?>

