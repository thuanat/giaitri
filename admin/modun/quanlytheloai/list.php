<?php 
  //include('../../config/connect.php');
$sql =  "SELECT*FROM genre ORDER BY genre_id DESC";
$query_lietke_tl = mysqli_query($conn,$sql);
 ?>
 <p>Show Thể Loại</p>
  		<table style="width: 100%" border="1" style="border-collapse: collapse;">
    			<tr>
    				<th>ID</th>
    				<th>Genre_name</th>
    				
    			</tr>
          <tbody>
              <?php 
              $i =0;
                  while( $row = mysqli_fetch_assoc($query_lietke_tl)){
                    $i++;
              ?>
                 <tr>
                    <td><?= $row['genre_id'] ?></td>
                    <td><?= $row['genre_name'] ?></td>
                    
                    <!-- chu y ten phai match voi ten cot trong db -->
                    <td><a href="suasp.php?id=<?= $row['genre_id']?>">Edit</a></td>
                    <td><a href="xoa.php?id=<?= $row['genre_id']?>">Delete</a></td>
                  </tr>
              <?php 
                }
              ?> 
          </tbody>
  		</table>
<!-- #main -->
