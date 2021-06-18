	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<!-- menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.php" >Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="danhmuc.php" >Song<span class="glyphicon glyphicon-home sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="genre.php" > <span class="glyphicon glyphicon-user"></span>Genre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php" > <span class="glyphicon glyphicon-user"></span>Cart</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown">
							Dropdown
						</a>
						<div class="dropdown-content">
							<a class="dropdown-item" href="#" >Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>


				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"> <span class="glyphicon glyphicon-user"></span> Login</a> | <a href="dangki.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a>
					</li>

				</div>
			</div>
		</nav>
		<!-- end menu -->
		<!-- slide -->
		<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/29.jpg" alt="First slide" style="width="1280px" height="720px" " >
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/11.jpg" alt="Second slide"  style="width="1280px" height="720px" " >
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/30.jpg" alt="Second slide"  style="width="1280px" height="720px" ">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- chi tiết sản phẩm -->
		<?php 
		session_start();
		require_once("admin/config/connect.php");

		?>
		<div class="container">
			<div class="row">
				<?php 
				$song_id=$_GET["id"];
				$sql_chitiet = "SELECT * FROM song,singer,genre Where song.singer_id=singer.singer_id and song.genre_id=genre.genre_id and song.song_id={$song_id}";
				$query_chitiet= mysqli_query($conn,$sql_chitiet);
				while ($row=mysqli_fetch_assoc($query_chitiet)) {
					?>
					<div class="col-md-6" style=" text-align: left;">
						<h2 class="song_name"><?php echo $row['song_name'] ?></h2>
						
						<audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px">
							<source src="Music/<?php echo $row['song_mp3'] ?>" type="audio/mpeg">
							</audio>
							<p style="color: red;padding-left: 20px;"> Price: <?php echo $row['song_price']." $"; ?></p>
							<form method="POST" action="cart.php"> 
								<input type="number" name="sl" value="1" min="1" max="1" style="display: none;"> 
								<input type="hidden" name="id" value="<?=$song_id?>">
								<button type="submit" name="button-buy" class="button-buy"><i class="fas fa-cart-plus"></i>  Add to cart</button>
							</form>
							<script type="text/javascript">
								function myAudio(event){
									if(event.currentTime >60){
										event.currentTime=0;
										event.pause();
										alert ("Sign in to continue!");
									}
								}
							</script>
							<br>
							<br>
							<div style="border-bottom: 1px solid black"></div>
							<br>
							<p>
								Basic song info:
							</p>
							<h4>Singer: <?php echo $row["singer_name"]; ?></h4>
							<h5>Genre: <?php echo $row["genre_name"]; ?></h5>
							
						</div>
						<div class="col-md-5">
							<img src="img/<?php echo $row['song_img']?>" style="width: 600px;height: 500px" >
						</div>
						<?php
					}
					?>
				</div>
			</div>