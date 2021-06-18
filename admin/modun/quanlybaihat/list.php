 <?php 
//include("../../config/connect.php");
$sql =  "SELECT*FROM song ORDER BY song_id DESC";
$query_lietke_sp = mysqli_query($conn,$sql);
 ?>
 <p>Show bài hát</p>
  		<table style="width: 100%" border="1" style="border-collapse: collapse;">
    			<tr>
    				<th>ID</th>
    				<th>Name</th>
    				<th>Image</th>
    				<th>Lyric</th>
    				<th>MP3</th>
            <th>Singer</th>
            <th>Genre</th>
            <th>Price</th>
            <th></th>
            <th></th>
    			</tr>
          <tbody>
              <?php 
              $i =0; 
                  while( $row = mysqli_fetch_assoc($query_lietke_sp)){
                    $i++;
              ?>
                 <tr>
                    <td><?php  echo "$i"?></td>
                    <td><?php echo $row['song_name'] ?></td>
                     <td><img src="../../img/"<?php echo $row['song_img']?> ></td>
                    <td><?php echo $row['song_lyric']?></td>
                    <td><?php echo $row['song_mp3']?></td>
                    <td><?php echo $row['singer_id']?></td>
                    <td><?php echo $row['genre_id']?></td>
                     <td><?php echo $row['song_price'] . "$"?></td> 
                    <!-- chu y ten phai match voi ten cot trong db -->
                   <td>
                     <a href="modun/quanlybaihat/xuly.php?id=<?php echo $row['song_id']?>">Xóa</a> | <a href="?action=quanlybaihat&query=sua&id=<?php echo $row['song_id']?>">Sửa</a>
                   </td>
                  </tr>
              <?php 
                }
              ?> 
          </tbody>
  		</table>
<!-- #main -->


 