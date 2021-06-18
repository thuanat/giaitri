
 <?php 
//include("../../config/connect.php");
$sql_sua =  "SELECT*FROM singer WHERE singer_id ='$_GET[id]' LIMIT 1";
$query_sua_cs = mysqli_query($conn,$sql_sua);
 ?>

<table border="1" width="50%" style="border-collapse;">
	<form method="POST" action="modun/quanlycasi/xuly.php?id=<?php echo $_GET['id'] ?>">
		<?php 
		while ($dong= mysqli_fetch_array($query_sua_cs)) {
		?>
		  <tr>
		    <th colspan="2" style="color: #FF3300">Điền thông tin tại đây </th>
		  </tr>
			<tr >
			  	<td>Singer_name</td>
			  	<td><input type="text" values="<?php echo $dong['singer_name']?>" name="singer_name">
			  	</td>
			 <tr >
				<td colspan="2"><input type="submit" name="Add_Singer" value="Sửa Ca Sĩ"></td>
			</tr>
			<?php
			}
			?>
	</form>
</table>

	