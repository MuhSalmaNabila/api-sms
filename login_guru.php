<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$nip = $_POST['nip'];
$password = $_POST['password'];
$sql = "SELECT * FROM tbl_guru WHERE nip='$nip' AND password='$password'";

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