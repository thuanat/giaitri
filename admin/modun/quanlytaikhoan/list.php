<?php 
  //include('../../config/connect.php');
$sql =  "SELECT*FROM user ORDER BY user_id DESC";
$query_lietke_tk = mysqli_query($conn,$sql);
 ?>
 <p>Show bài hát</p>
  		<table style="width: 100%" border="1" style="border-collapse: collapse;">
    			<tr>
    				<th>ID</th>
    				<th>Username</th>
    				<th>Password</th>	
    			</tr>
          <tbody>
              <?php 
              $i =0;
                  while( $row = mysqli_fetch_assoc($query_lietke_tk)){
                    $i++;
              ?>
                 <tr>
                    <td><?= $row['user_id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['password'] ?></td>
                   
                    <!-- chu y ten phai match voi ten cot trong db -->
                    <td><a href="suasp.php?id=<?= $row['user_id']?>">Edit</a></td>
                    <td><a href="xoa.php?id=<?= $row['user_id']?>">Delete</a></td>
                  </tr>
              <?php 
                }
              ?> 
          </tbody>
  		</table>
<!-- #main -->
