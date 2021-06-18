<?php
include("config/connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <!-- Bootstrap CSS -->
    </head>
<body>
	<h3 class="title_admin">Wellcome</h3>
	<div class="wrapper">
		  <?php 
       include("modun/menu.php");
       include("modun/main.php");
        ?>
	</div>	 
</body>
</html>
