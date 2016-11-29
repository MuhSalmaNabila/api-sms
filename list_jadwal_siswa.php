<?php 
include'config.php';
   
 $nis=$_GET['nis'];  
$query = "SELECT tbl_detail_jadwal.id_jadwal,tbl_detail_jadwal.nis,tbl_detail_jadwal.img_jadwal,tbl_detail_jadwal.hari,tbl_guru.nama_guru,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel,tbl_mapel.jam_mulai,tbl_mapel.jam_selesai FROM tbl_detail_jadwal JOIN tbl_guru ON tbl_guru.nip=tbl_detail_jadwal.nip JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel WHERE tbl_detail_jadwal.nis='$nis'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_jadwal" => $row["id_jadwal"],"nis" => $row["nis"],"nama_guru" => $row["nama_guru"], "kelas" => $row["kelas"], "sub_kelas" => $row["sub_kelas"], "mapel" => $row["mapel"], "hari" => $row["hari"], "jam_mulai" => $row["jam_mulai"], "jam_selesai" => $row["jam_selesai"], "img_jadwal" => $row["img_jadwal"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>