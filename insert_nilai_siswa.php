<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'con.php';
	createNilai();
}

function createNilai() {
	global $connect;
	$nip = $_POST["nip"];
	$nis = $_POST["nis"];
	$kode_mapel = $_POST["kode_mapel"];
	$nilai_uh = $_POST["nilai_uh"];
	$nilai_tugas = $_POST["nilai_tugas"];
	$nilai_uts = $_POST["nilai_uts"];
	$nilai_uas = $_POST["nilai_uas"];
	$nilai_akhir = $_POST["nilai_akhir"];
	$img_nilai = $_POST["img_nilai"];
	$query = "Insert into tbl_detail_nilai
	(nip,nis,kode_mapel,nilai_uh,nilai_tugas,nilai_uts,nilai_uas,nilai_akhir,img_nilai) values ('$nip','$nis','$kode_mapel','$nilai_uh','$nilai_tugas','$nilai_uts','$nilai_uas','$nilai_akhir','$img_nilai');";

	mysqli_query($connect, $query) or die(mysqli_error($connect));
	mysqli_close($connect);

}
?>