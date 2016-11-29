<?php 
include'config.php';
   
    $nis=$_GET['nis'];  
$query = "SELECT tbl_absensi.id_absensi,tbl_absensi.nis,tbl_siswa.nama_siswa,tbl_mapel.mapel,tbl_absensi.tgl_absensi,tbl_siswa.img_siswa FROM tbl_absensi JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_absensi.kode_mapel JOIN tbl_siswa ON tbl_siswa.nis=tbl_absensi.nis WHERE tbl_absensi.nis='$nis'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_absensi" => $row["id_absensi"],"nis" => $row["nis"], "nama_siswa" => $row["nama_siswa"], "mapel" => $row["mapel"],"tgl_absensi" => $row["tgl_absensi"],"img_siswa" => $row["img_siswa"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>