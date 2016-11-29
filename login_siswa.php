<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$nis = $_POST['nis'];
$password = $_POST['password'];
$sql = "SELECT * FROM tbl_siswa WHERE nis='$nis' AND password='$password'";

require_once('config.php');
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo "success";
}else{
echo "failure";
}
mysqli_close($con);
}
?>