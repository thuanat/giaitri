
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">  
  <style>
    .align {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 320px;
  max-width: 20rem;
  width: 90%;
}
.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.icons {
  display: none;
}
.icon {
  display: inline-block;
  fill: #606468;
  font-size: 16px;
  font-size: 1rem;
  height: 1em;
  vertical-align: middle;
  width: 1em;
}
/* layout/base.css */
* {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}
html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-size: 100%;
  height: 100%;
}
body {
  background-color: #2c3338;
  color: #606468;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: 400;
  height: 100%;
  line-height: 1.5;
  margin: 0;
  min-height: 100vh;
}
/* modules/anchor.css */
a {
  color: #eee;
  outline: 0;
  email-decoration: none;
}
a:focus,
a:hover {
  email-decoration: underline;
}
/* modules/form.css */
input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
input[type='submit'] {
  cursor: pointer;
}
.form {
  margin: -14px;
  margin: -0.875rem;
}
.form input[type='password'],
.form input[type='email'],
.form input[type='submit'] {
  width: 100%;
}
.form__field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 14px;
  margin: 0.875rem;
}
.form__input {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
/* modules/login.css */
.login {
  color: #eee;
}
.login label,
.login input[type='email'],
.login input[type='password'],
.login input[type='submit'] {
  border-radius: 0.25rem;
  padding: 16px;
  padding: 1rem;
}
.login label {
  background-color: #363b41;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 20px;
  padding-left: 1.25rem;
  padding-right: 20px;
  padding-right: 1.25rem;
}
.login input[type='password'],
.login input[type='email'] {
  background-color: #3b4148;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.login input[type='password']:focus,
.login input[type='password']:hover,
.login input[type='email']:focus,
.login input[type='email']:hover {
  background-color: #434a52;
}
.login input[type='submit'] {
  background-color: #ea4c88;
  color: #eee;
  font-weight: 700;
  email-transform: uppercase;
}
.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: #d44179;
}
/* modules/email.css */
p {
  margin-bottom: 24px;
  margin-bottom: 1.5rem;
  margin-top: 24px;
  margin-top: 1.5rem;
}
.email--center {
  email-align: center;
}
  </style>
</head>
<body class="align">
    <div class="grid">
        <form action="" method="POST" class="form login">        
            <div class="form__field">
                <label for="login__username">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
                </svg>
                <span class="hidden">user</span></label>
                <input id="login__username" type="user" name="username" class="form__input" placeholder="username" required>
            </div>            
            <div class="form__field">
                <label for="login__password">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
                </svg>
                <span class="hidden">Password</span></label>
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>            
            <div class="form__field">
                <input type="submit" name = "Sign" value="Sign">
            </div>        
        </form>    
        <p class="email--center">Not a member? <a href="dangki.php">Sign up now</a></p>
    </div>
    <?php 

  include ("admin/config/connect.php");
  if(isset($_POST['Sign'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM user where Username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);   
    if($check_login == 0  ){
     echo "<script>alert('Password or Username is incorrect, please try again!')</script>";
     exit();
   }  
   if($check_login > 0){ 
   $_SESSION['use_rid'] = $row_login['user_id'];
  $_SESSION['username'] = $username;  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('admin/index_db.php','_self')</script>";
  }
}
//phân quyền admin và user
?>
  
</body>
</html>