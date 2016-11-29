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
$pdf->Cell(25.5,0.7,"Jadwal Ujian Di Sekolah",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Kelas', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Sub Kelas', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Mapel', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Jam Mulai', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Jam Selesai', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Tanggal Ujian', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Keterangan', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query = "SELECT tbl_detail_ujian.id_ujian,tbl_detail_ujian.tgl_ujian,tbl_detail_ujian.jam_mulai,tbl_detail_ujian.jam_selesai,tbl_detail_ujian.ket,tbl_detail_ujian.img_ujian,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel FROM tbl_detail_ujian JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_ujian.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_ujian.kode_mapel";
$result = mysqli_query($con,$query);

while($lihat=mysqli_fetch_array($result)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['kelas'],1, 0, 'C');
	
	$pdf->Cell(2, 0.8, $lihat['sub_kelas'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['mapel'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['jam_mulai'],1, 0, 'C');
	$pdf->Cell(2.5, 0.8, $lihat['jam_selesai'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['tgl_ujian'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['ket'], 1, 1,'C');
	
	$no++;
}

$pdf->Output("jadwal_ujian.pdf","I");

?>
