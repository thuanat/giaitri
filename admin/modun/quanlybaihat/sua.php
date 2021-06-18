Sửa bài hát
 <?php 
//include("../../config/connect.php");
$sql_sua =  "SELECT*FROM song WHERE song_id ='$_GET[id]' LIMIT 1";
$query_sua_sp = mysqli_query($conn,$sql_sua);
 ?>

<table border="1" width="50%" style="border-collapse;">
	<form method="POST" action="modun/quanlybaihat/xuly.php?id=<?php echo $_GET['id'] ?>">
		<?php 
		while ($dong= mysqli_fetch_array($query_sua_sp)) {
		?>
		  <tr>
		    <th colspan="2" style="color: #FF3300"> </th>
		  </tr>
			<tr >
			  	<td>Song_name</td>
			  	<td><input type="text" values="<?php echo $dong['song_name']?>" name="song_name"></td>

			</tr>
			  <tr>
			  	<td>Song_img</td>
			  	<td><input type="file" name="song_img" values="<?php echo $dong['song_img']?>" ></td>
			</tr>
			<tr>
			  	<td>Song_lyric</td>
			  	<td><textarea rows="5" name="song_lyric" values="<?php echo $dong['song_lyric']?>"></textarea></td>
			</tr>
			<tr>
			  	<td>Song_mp3</td>
			  	<td><input type="file" name="song_mp3" values="<?php echo $dong['song_mp3']?>"></td>
			</tr>
			<tr>
			  	<td>Singer_id</td>
			  	<td><input type="Singer_id" name="singer_id" values="<?php echo $dong['singer_id']?>"></td>
			</tr>
			<tr>
			  	<td>genre_id</td>
			  	<td><input type="genre_id" name="genre_id" values="<?php echo $dong['genre_id']?>"></td>
			</tr>
			<tr>
			  	<td>Song_price</td>
			  	<td><input type="Song_price" name="song_price" values="<?php echo $dong['song_price']?>"></td>
			</tr>
			<tr >
				<td colspan="2"><input type="submit" name="Add_Song" value="Sửa Bài Hát"></td>
			</tr>
			<tr >
				<td colspan="2"><input type="exit" name="Exit" value="Thoát" action="list.php"></td>
			</tr>
			<?php
			}
			?>
	</form>
</table>

	