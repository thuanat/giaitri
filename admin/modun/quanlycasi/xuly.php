<?php 
include ("../../config/connect.php");

$singer_name = $_POST['singer_name'];

if (isset($_POST['Add_singer'])) {
	$sql_them = "INSERT INTO singer (singer_name) VALUES('".$singer_name."')";
	mysqli_query($conn,$sql_them);
	header('location:../../index_db.php?action=quanlycasi&query=them');
}elseif (isset($_POST['Add_singer'])) {
	//sua
	$sql_update = "UPDATE singer SET singer_name='".$singer_name."' WHERE singer_id = '$_GET[id]'"; 
	mysqli_query($conn,$sql_sua);
	header('location:../../index_db.php?action=quanlycasi');
}else {
	//xóa
	$id=$_GET['id'];
	$sql_xoa = "DELETE FORM singer WHERE singer_id ='".$singer_id."'";
	mysqli_query($conn,$sql_xoa);
	header('location:../../index_db.php?action=quanlycasi&query=them');
}
 ?>