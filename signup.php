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
                <h3 class="subtitle">Sign Up</h3>
                <p>Please fill in this form to create an account.</p>
            </div>
          
            <div class="container">
                <input type="text" placeholder="Enter Username" name="uname" required>
      
                <input type="text" placeholder="Enter Email" name="email" required>
      
                <input type="password" placeholder="Enter Password" name="psw" required>
      
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
                <button type="submit" class="btn btn-success" name="register" style="width: 100%;">Register</button>

            </div>
           
        </form>
    </div>
  </div>
</div>
</body>
</html>

<?php
    include('config.php');
    if(isset($_POST['register']))
    {
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $pass_rep = $_POST['psw-repeat'];

        if($pass != $pass_rep){
            echo "<script>alert('Password Mismatch')</script>";
            exit();
        }

        $sql = "INSERT INTO user (username, email, password) VALUES ('$uname', '$email', '$pass')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully')</script>";
            echo "<script>window.open('signin.php','_self')</script>";
        } else {
            echo "<script>alert('An error occured.')</script>";
            exit();
        }

        $conn->close();
    }
?>