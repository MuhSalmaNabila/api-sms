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
$pdf->Cell(25.5,0.7,"Record Nilai",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Mapel', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Nilai Tugas', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Nilai UH', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Nilai UTS', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Nilai UAS', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Nilai Akhir', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Paraf', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$nis=$_GET['nis']; 
$query = "SELECT tbl_detail_nilai.id_nilai,tbl_detail_nilai.nis,tbl_detail_nilai.nilai_uh,tbl_detail_nilai.nilai_tugas,tbl_detail_nilai.nilai_uts,tbl_detail_nilai.nilai_uas,tbl_detail_nilai.nilai_akhir,tbl_detail_nilai.img_nilai,tbl_mapel.mapel FROM tbl_detail_nilai JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_nilai.kode_mapel WHERE tbl_detail_nilai.nis='$nis'";
$result = mysqli_query($con,$query);

while($lihat=mysqli_fetch_array($result)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['mapel'],1, 0, 'C');
	
	$pdf->Cell(2.5, 0.8, $lihat['nilai_tugas'],1, 0, 'C');
	$pdf->Cell(2.5, 0.8, $lihat['nilai_uh'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['nilai_uts'],1, 0, 'C');
	$pdf->Cell(2.5, 0.8, $lihat['nilai_uas'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['nilai_akhir'],1, 0, 'C');
	$pdf->Cell(4, 0.8,"", 1, 1,'C');
	
	$no++;
}

$pdf->Output("report_nilai.pdf","I");

?>
