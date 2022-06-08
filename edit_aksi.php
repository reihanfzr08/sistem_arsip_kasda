 <?php
include "header.php"; 
include "koneksi.php";

    $id=$_POST["id"];
    $SKPD=$_POST["SKPD"];
    $No_SP2D=$_POST["No_SP2D"];
    $Tanggal_SP2D=$_POST["Tanggal_SP2D"];
    $Uraian=$_POST["Uraian"];
    $Jumlah=$_POST["Jumlah"];

                    //query mengubah barang
                   $query = mysqli_query($koneksi, "UPDATE kasda set SKPD='$SKPD', No_SP2D='$No_SP2D', Tanggal_SP2D='$Tanggal_SP2D', Uraian='$Uraian', Jumlah='$Jumlah' WHERE id ='$id'");
if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
           header("location:tampildata.php");
      ?>