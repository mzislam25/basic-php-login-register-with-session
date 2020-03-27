<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
<div class="bgimg-1">
  <div class="container">
    <div class="header">
        <a class="logo" href="index.php"><img class="img-logo" src="./assets/images/logo.png"></a>
    </div>
    <div class="cap-container">
        <form action="" method="POST">
            <div class="imgcontainer">
              <img src="./assets/images/avatar.jpg" alt="Avatar" class="avatar">
            </div>
          
            <div class="container">
              <input type="text" placeholder="Enter Username" name="uname" required>
          
              <input type="password" placeholder="Enter Password" name="psw" required>
              
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
              <br><br>
              <button type="submit" class="btn btn-success" name="login" style="width: 100%">Login</button>

            </div>
            <hr>
            <a class="psw" href="forget-password.php">Forgot password?</a>
        </form>
    </div>
  </div>
</div>
</body>
</html>

<?php
  include('config.php');
  session_start();
  if(isset($_POST['login']))
  {
    $uname = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "SELECT username FROM user WHERE username = '$uname' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $_SESSION["user"] = $uname;
      echo "<script>alert('Logged in successfully')</script>";
      echo "<script>window.open('home.php','_self')</script>"; 
    } else {
      echo "<script>alert('Invald Username or Password')</script>";
      exit();
    }
    $conn->close();
  }
?>