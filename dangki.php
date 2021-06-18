<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
        <div class="head">
                <h1 style="color: red" >Đăng kí tài khoản </h1>
        </div>
        <div class="formdangki">
              <form method="POST" action="">
                <div class="taotaikhoan">
                        <label for="Username">username:</label>
                        <input type="text" class="form-control" id="username" placeholder="xxxxxxxxxx" name="username">
                </div>
                <div class="taotaikhoan">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" id="password" placeholder="xxxxxxxxxx" name="password">
                </div>
                <button class="btn btn_success" type="submit" name="register" style="color: red;">Rigister</button> 
                <button class="btn btn_success", style="color: red;"><a href="login.php">Exit</a></button> 
              </form>
      </div>
  <php 
    if (isset($_POST['register'])) { 
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql="insert into user values (NULL,'$username','$password')";
      $result = mysqli_query($connect,$sql);
      if ($result) {
        echo "successfull";
      
      }
      else{
        echo"";
      }  
    }
  ?>
  </body>
</html>







