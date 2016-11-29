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
$pdf->Cell(25.5,0.7,"Jadwal Harian Siswa",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Guru', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Mapel', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Kelas', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Sub_Kelas', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Hari', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Jam Mulai', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Jam Selesai', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
 $nis=$_GET['nis'];  
$query = "SELECT tbl_detail_jadwal.id_jadwal,tbl_detail_jadwal.nis,tbl_detail_jadwal.img_jadwal,tbl_detail_jadwal.hari,tbl_guru.nama_guru,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel,tbl_mapel.jam_mulai,tbl_mapel.jam_selesai FROM tbl_detail_jadwal JOIN tbl_guru ON tbl_guru.nip=tbl_detail_jadwal.nip JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel WHERE tbl_detail_jadwal.nis='$nis'";
$result = mysqli_query($con,$query);

while($lihat=mysqli_fetch_array($result)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nama_guru'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['mapel'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['kelas'],1, 0, 'C');
	$pdf->Cell(2.5, 0.8, $lihat['sub_kelas'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['hari'],1, 0, 'C');
	$pdf->Cell(2.5, 0.8, $lihat['jam_mulai'], 1, 0,'C');
	$pdf->Cell(2.5, 0.8, $lihat['jam_selesai'], 1, 1,'C');

	$no++;
}

$pdf->Output("jadwal_harian.pdf","I");

?>
