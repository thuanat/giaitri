<?php 
include ("../../config/connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$role_id = $_POST['role_id'];

if (isset($_POST['Add_Account'])) {
	$sql_them = "INSERT INTO user (username, password,role_id) VALUES('".$username."','".$password."','".$role_id."')";
	mysqli_query($conn,$sql_them);
	header('location:../../index_db.php?action=quanlytaikhoan&query=them');
}
 ?>
