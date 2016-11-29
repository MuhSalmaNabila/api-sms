<?php
require_once 'config.php';
$nis = $_GET['nis'];
$sql = "SELECT * from tbl_siswa where nis='$nis' ";
$result = mysqli_query($con, $sql);
$response = array("profil" => array());
while ($row = mysqli_fetch_array($result)) {
	$temp = array("nama_siswa" => $row["nama_siswa"]);
	array_push($response["profil"], $temp);
}
$data = json_encode($response);
echo "$data";
?>