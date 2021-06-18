<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		#total{
      width: 100%;background-color: grey;display: block;float: none;text-align: center;
    }
    .clearfix{
      overflow: auto;
    }
    .title{
      padding-top: 25px;padding-bottom: 25px;
    }
    .products{
      background-color: white; width: 97%;  margin: 20px;  overflow: auto; border: 1px solid black
    }
    .giohang{
      color: red;font-size: 30px;float: left;padding-left: 50px;
    }
    .img-cart{
      width: 300px;height: 200px;padding: 10px; float: left;
    }
    .delete{
      background-color: #9C2B2B;width: 200px;border: 2px solid black;float: right;
      margin-bottom: 25px
    }
  </style>

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



  <?php 
  
  require_once("admin/config/connect.php");
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id =$_POST['id'];
    if (empty($_SESSION['cart'][$id])) {
      $q=mysqli_query($conn,"SELECT * FROM song WHERE song_id = {$id}");
      $product = mysqli_fetch_array($q);
      $_SESSION['cart'][$id]=$product;
      $_SESSION['cart'][$id]['sl']=$_POST['sl'];
    }
    
  }
  ?>
  <div class="container-fluid">
   <div class="row">
    <link rel="stylesheet" type="text/css" href="cart.css">
    
    <br>
    <br>
    <?php 
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) :
        ?>
        <div class="products" style="border: 2px solid black">
          <a href="detail.php?id=<?php echo $item['song_id']?>" style="text-decoration: none;">
            <div><img src="img/<?php echo $item['song_img']?>" class="img-cart" style="width: 800px; height: 450px;></div>
            <h2><?php echo $item['song_name'] ?></h2>
            <p style="color: red">Price: <?php echo $item['song_price']." $"; ?></p>
            <?php
            echo "<a href='delcart.php?productid=$item[song_id]' style='text-decoration: none;'>Delete</a>";
            ?>
          </a>
        </div>
        <?php
      endforeach;
    }
    else 
      echo "There are no products in the product";
    ?>
    <br>
    <a href="delcart.php?productid=0" style="text-decoration: none; color: white"><button type="button" class="btn btn-danger">Delete All</button></a>
    <div id="total" class="clearfix">
      <?php
      $tong = 0;
      foreach ($_SESSION['cart'] as $item ) :
        $tong += $item['sl'] * $item['song_price'];
      endforeach;
      ?>
    </div>  
    <div class="container" style="border-top:3px solid #38D276;margin-top: 20px">
      <div class="col-md-6" style="border: 1px solid #38D276">
        <h3 style="text-align: center;">Payment</h3>
        <form method="POST" action="thanhtoan.php" class="was-validated">
          <div class="form-group">
            <label for="usr">UserName:</label>
            <input type="text" class="form-control" id="username" name="username" ?>
          </div>
          <label for="bank">Select payment bank</label>
          <select class="custom-select" required id="bank" name="bank">
            <option selected></option>
            <option value="Vietcombank">Vietcombank</option>
            <option value="Techcombank">Techcombank</option>
            <option value="Airpay">Airpay</option>
            <option value="momo">momo</option>
          </select>
          <div class="form-group">
            <div class="form-group">
              <label for="usr">Order date:</label>
              <input type="text" class="form-control" id="usr" name="date" value="<?php
              date_default_timezone_set('Asia/Ho_Chi_Minh');
              echo "". date("Y.m.d h:i:sa");
              ?>" readonly>
            </div>
            <div class="form-group">
              <label for="usr">Total</label>
              <input type="text" class="form-control" id="usr" value=" <?php echo number_format($tong) ." $" ?>" readonly name="total">
            </div>
            <input type="submit" class="btn btn-success" value="Pay">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Load jquery trước khi load bootstrap js -->
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>