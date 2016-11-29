<?php 
include'config.php';
    
 $nip=$_GET['nip'];  
$query = "SELECT tbl_detail_jadwal.id_jadwal,tbl_detail_jadwal.nis,tbl_siswa.nama_siswa,tbl_siswa.img_siswa,tbl_detail_jadwal.kode_mapel,tbl_mapel.mapel,tbl_kelas.kelas,tbl_kelas.sub_kelas FROM tbl_detail_jadwal JOIN tbl_siswa ON tbl_siswa.nis=tbl_detail_jadwal.nis JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel WHERE tbl_detail_jadwal.nip='$nip'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_jadwal" => $row["id_jadwal"],"nis" => $row["nis"],"nama_siswa" => $row["nama_siswa"], "kode_mapel" => $row["kode_mapel"],"mapel" => $row["mapel"], "kelas" => $row["kelas"], "sub_kelas" => $row["sub_kelas"], "img_siswa" => $row["img_siswa"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>