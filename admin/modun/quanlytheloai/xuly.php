<?php 
include ("../../config/connect.php");

$genre_name = $_POST['genre_name'];

if (isset($_POST['Add_genre'])) {
	$sql_them = "INSERT INTO genre (genre_name) VALUES('".$genre_name."')";
	mysqli_query($conn,$sql_them);
	header('location:../../index_db.php?action=quanlytheloai&query=them');
}
 ?>
