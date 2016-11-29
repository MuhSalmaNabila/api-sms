<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'con.php';
	createAbsensi();
}

function createAbsensi() {
	global $connect;
	$nip = $_POST["nip"];
	$nis = $_POST["nis"];
	$kode_mapel = $_POST["kode_mapel"];
	$status = $_POST["status"];

	$query = "Insert into tbl_absensi(nip,nis,kode_mapel,status) values ('$nip','$nis','$kode_mapel','$status');";

	mysqli_query($connect, $query) or die(mysqli_error($connect));
	mysqli_close($connect);

}
?>