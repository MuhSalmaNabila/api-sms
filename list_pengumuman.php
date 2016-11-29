<?php 
include'config.php';
   

$query = "SELECT * from tbl_pengumuman ORDER BY id_p DESC ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_" => $row["id_p"],
	 "judul" => $row["judul"], "detail" => $row["detail"],"tgl" => $row["tgl"],"img_p" => $row["img_p"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>