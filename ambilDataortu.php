<?php
require_once 'config.php';
$nio = $_GET['nio'];
$sql = "SELECT * from tbl_orangtua where nio='$nio' ";
$result = mysqli_query($con, $sql);
$response = array("profil" => array());
while ($row = mysqli_fetch_array($result)) {
	$temp = array("nama_ortu" => $row["nama_ortu"], "nis" => $row["nis"]);
	array_push($response["profil"], $temp);
}
$data = json_encode($response);
echo "$data";
?>