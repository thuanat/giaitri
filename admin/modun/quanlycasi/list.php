<?php 
  //include('../../config/connect.php');
$sql =  "SELECT*FROM singer ORDER BY singer_id DESC";
$query_lietke_cs = mysqli_query($conn,$sql);
 ?>
 <p>Show bài hát</p>
  		<table style="width: 100%" border="1" style="border-collapse: collapse;">
    			<tr>
    				<th>ID</th>
    				<th>Singername</th>
    			
    			</tr>
          <tbody>
              <?php 
              $i =0;
                  while( $row = mysqli_fetch_assoc($query_lietke_cs)){
                    $i++;
              ?>
                 <tr>
                    <td><?= $row['singer_id'] ?></td>
                    <td><?= $row['singer_name'] ?></td>
                    <!-- chu y ten phai match voi ten cot trong db -->
                    <td>
                     <a href="modun/quanlycasi/xuly.php?id=<?php echo $row['singer_id']?>">Xóa</a> | <a href="?action=quanlycasi&query=sua&id=<?php echo 
                     $row['singer_id']?>">Sửa</a>
                   </td>
                  </tr>
              <?php 
                }
              ?> 
          </tbody>
  		</table>
<!-- #main -->
