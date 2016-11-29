<?php 
include'config.php';
    
   
$query = "SELECT tbl_detail_ujian.id_ujian,tbl_detail_ujian.tgl_ujian,tbl_detail_ujian.jam_mulai,tbl_detail_ujian.jam_selesai,tbl_detail_ujian.ket,tbl_detail_ujian.img_ujian,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel FROM tbl_detail_ujian JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_ujian.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_ujian.kode_mapel";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_ujian" => $row["id_ujian"],"kelas" => $row["kelas"],"sub_kelas" => $row["sub_kelas"], "mapel" => $row["mapel"], "sub_kelas" => $row["sub_kelas"], "mapel" => $row["mapel"], "jam_mulai" => $row["jam_mulai"], "jam_selesai" => $row["jam_selesai"], "tgl_ujian" => $row["tgl_ujian"], "ket" => $row["ket"], "img_ujian" => $row["img_ujian"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>