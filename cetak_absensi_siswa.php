<?php
include 'config.php';
require('pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('img/ic_logosis.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Sistem Informasi Sekolah',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 081615731024',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL.Batuaji Ringinrejo Kab.Kediri',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.sisteminformasisekolah.com email : admin@admin.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Record Absensi",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nis', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama Siswa', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Mapel', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal Absensi', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Paraf', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$nis=$_GET['nis'];  
$query = "SELECT tbl_absensi.id_absensi,tbl_absensi.nis,tbl_siswa.nama_siswa,tbl_mapel.mapel,tbl_absensi.tgl_absensi,tbl_siswa.img_siswa FROM tbl_absensi JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_absensi.kode_mapel JOIN tbl_siswa ON tbl_siswa.nis=tbl_absensi.nis WHERE tbl_absensi.nis='$nis'";
$result = mysqli_query($con,$query);

while($lihat=mysqli_fetch_array($result)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nis'],1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['nama_siswa'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['mapel'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['tgl_absensi'],1, 0, 'C');
	$pdf->Cell(4, 0.8,"", 1, 1,'C');
	
	$no++;
}

$pdf->Output("report_absensi.pdf","I");

?>
