<?php
require_once 'config.php';
$nip = $_GET['nip'];
$sql = "SELECT * from tbl_guru where nip='$nip' ";
$result = mysqli_query($con, $sql);
$response = array("profil" => array());
while ($row = mysqli_fetch_array($result)) {
	$temp = array("nama_guru" => $row["nama_guru"]);
	array_push($response["profil"], $temp);
}
$data = json_encode($response);
echo "$data";
?>