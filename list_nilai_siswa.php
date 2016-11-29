<?php 
include'config.php';
       $nis=$_GET['nis']; 
$query = "SELECT tbl_detail_nilai.id_nilai,tbl_detail_nilai.nis,tbl_detail_nilai.nilai_uh,tbl_detail_nilai.nilai_tugas,tbl_detail_nilai.nilai_uts,tbl_detail_nilai.nilai_uas,tbl_detail_nilai.nilai_akhir,tbl_detail_nilai.img_nilai,tbl_mapel.mapel FROM tbl_detail_nilai JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_nilai.kode_mapel WHERE tbl_detail_nilai.nis='$nis'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

	$temp = array("id_nilai" => $row["id_nilai"],"mapel" => $row["mapel"],"nilai_tugas" => $row["nilai_tugas"], "nilai_uh" => $row["nilai_uh"], "nilai_uts" => $row["nilai_uts"], "nilai_uas" => $row["nilai_uas"], "nilai_akhir" => $row["nilai_akhir"], "img_nilai" => $row["img_nilai"]);

	array_push($arr, $temp);
}

$data = json_encode($arr);
echo "$data";
?>