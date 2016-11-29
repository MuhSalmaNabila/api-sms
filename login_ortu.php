<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$nio = $_POST['nio'];
$password = $_POST['password'];
$sql = "SELECT * FROM tbl_orangtua WHERE nio='$nio' AND password='$password'";

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