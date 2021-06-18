<div class="clear"></div>
<div class="main">
	<?php
		if(isset($_GET['action']) && $_GET["query"]) {
			$tam= $_GET['action'];
			$query= $_GET['query'];

		}else {
			$tam='';
			$query='';
		}
		//quanlibaihat
		if ($tam=='quanlybaihat'&& $query=='them') {
			include("quanlybaihat/them.php");
			include("quanlybaihat/list.php");

		}elseif ($tam=='quanlybaihat' && $query =='sua')  {
			
			include("quanlybaihat/sua.php");	
		}
		else{
			include("drashboad.php");
		}
        //quanlytaikhoan
		if ($tam=='quanlytaikhoan'&& $query=='them') {
			include("quanlytaikhoan/them.php");
			include("quanlytaikhoan/list.php");
		}elseif ($tam=='quanlytaikhoan' && $query =='sua')  {
			include("quanlytaikhoan/sua.php");	
		}else{
			include("drashboad.php");
		}
		//quanlycasi
		if ($tam=='quanlycasi'&& $query=='them') {
			include("quanlycasi/them.php");
			include("quanlycasi/list.php");
		}elseif ($tam=='quanlycasi' && $query =='sua')  {
			include("quanlycasi/sua.php");	
		}else{
			include("drashboad.php");
		}
		//quanlytheloai
		if ($tam=='quanlytheloai'&& $query=='them') {
			include("quanlytheloai/them.php");
			include("quanlytheloai/list.php");
		}elseif ($tam=='quanlytheloai' && $query =='sua')  {
				include("quanlytheloai/sua.php");	
		}else{
			include("drashboad.php");
		}
	  ?>
	  	
	  </div> 