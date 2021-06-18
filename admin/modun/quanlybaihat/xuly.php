
<?php 
include ("../../config/connect.php");
$tenbaihat = $_POST['song_name'];
$img = $_POST['song_img'];
$lyric = $_POST['song_lyric'];
$mp3 = $_POST['song_mp3'];
$singer_id = $_POST['singer_id'];
$genre_id = $_POST['genre_id'];
$price = $_POST['song_price'];
if (isset($_POST['Add_Song'])) {
	//them
	$sql_them = "INSERT INTO song (song_name,song_img,song_lyric,song_mp3,singer_id,genre_id,song_price) VALUES('".$tenbaihat."','".$img."','".$lyric."','".$mp3."',
	'".$singer_id."','".$genre_id."','".$price ."')";
	mysqli_query($conn,$sql_them);
	header('location:../../index_db.php?action=quanlybaihat&query=them');
}elseif (isset($_POST['suabaihat'])) {
	//sua
	$sql_update = "UPDATE song SET song_name='".$tenbaihat."',song_img='".$img."',song_lyric='".$lyric."',song_mp3='".$mp3."',singer_id='".$singer_id."',genre_id='".$genre_id."',song_price='".$song_price."'WHERE song_id = '$_GET[id]'"; 
	mysqli_query($conn,$sql_them);
	header('location:../../index_db.php?action=quanlybaihat');
}else {
	//xóa
	$id=$_GET['id'];
	$sql_xoa = "DELETE FORM song WHERE song_id ='".$tenbaihat."'";
	mysqli_query($conn,$sql_xoa);
	header('location:../../index_db.php?action=quanlybaihat&query=them');
}
 ?>

