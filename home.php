<?php 
  session_start();
?>
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
      <a class="logo" href=""><img class="img-logo" src="./assets/images/logo.png"></a>
    </div>
    <div class="caption">
      <h3 class="title">WELCOME <?php echo $_SESSION["user"];?></h3><br>
      <div class="login">
        <a href="logout.php" class="button active"><span>Logout</span></a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
