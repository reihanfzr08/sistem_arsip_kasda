<?php

$server = "localhost";
  $user = "root";
 $pass = "";
 $dbname = "arsip";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }

// Koneksi library FPDF
require('fpdf184/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(289,7,'LAPORAN ARSIP KAS DAERAH (SP2D)',0,1,'C');
$pdf->Cell(289,7,' KABUPATEN BANDUNG BARAT',0,1,'C');
$pdf->Ln(2);
$pdf->SetFont('Times','BU',15);
for ($i=0; $i < 10; $i++) {
    $pdf->Cell(280,0,'',1,1,'C');
}
$pdf->SetFont('Arial','B',12);
$pdf->Cell(289,8,'Arsip Surat Perintah Pencairan Dana',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10, 'C');
$pdf->Cell(10,10,'NO.',1,0 , 'C');
$pdf->Cell(55,10,'SKPD',1,0 , 'C');
$pdf->Cell(50,10,'NOMER SP2D',1,0 , 'C');
$pdf->Cell(30,10,'TANGGAL SP2D',1,0 , 'C');
$pdf->Cell(93,10,'URAIAN',1,0 , 'C');
$pdf->Cell(43,10,'JUMLAH',1,1 , 'C');
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM kasda");
$id=1;
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,10,$id++. '.',1, 0, 'C');
    $pdf->Cell(55,10,$row['SKPD'],1,0, 'C');
    $pdf->Cell(50,10,$row['No_SP2D'],1,0, 'C');
    $pdf->Cell(30,10,($row['Tanggal_SP2D'] !='0000-00-00') ? date('d-m-Y', strtotime($row['Tanggal_SP2D'])) :'', 1, 0, 'C');
    $pdf->Cell(93,10,$row['Uraian'],1,0, 'C');
    $pdf->Cell(43,10,($row['Jumlah']) ? number_format($row['Jumlah'],0,',','.') :'',1,1, 'C');
}

$pdf->Output();
?>