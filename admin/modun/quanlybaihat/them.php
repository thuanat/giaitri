<table border="1" width="50%" style="border-collapse;">
	<form method="POST" action="modun/quanlybaihat/xuly.php">

		  <tr>
		    <th colspan="2" style="color: #FF3300">Điền thông tin tại đây </th>
		  </tr>
			<tr >
			  	<td>Song_name</td>
			  	<td><input type="text" name="song_name"></td>

			</tr>
			  <tr>
			  	<td>Song_img</td>
			  	<td><input type="file" name="song_img"></td>
			</tr>
			<tr>
			  	<td>Song_lyric</td>
			  	<td><textarea rows="5" name="song_lyric"></textarea></td>
			</tr>
			<tr>
			  	<td>Song_mp3</td>
			  	<td><input type="file" name="song_mp3"></td>
			</tr>
			<tr>
			  	<td>Singer_id</td>
			  	<td><input type="Singer_id" name="singer_id"></td>
			</tr>
			<tr>
			  	<td>genre_id</td>
			  	<td><input type="genre_id" name="genre_id"></td>
			</tr>
			<tr>
			  	<td>Song_price</td>
			  	<td><input type="Song_price" name="song_price"></td>
			</tr>
			<tr >
				<td colspan="2"><input type="submit" name="Add_Song" value="Thêm Bài Hát"></td>
			</tr>
			<tr >
				<td colspan="2"><input type="exit" name="Exit" value="Thoat" action="../../index_db.php"></td>
			</tr>
	</form>
</table>

