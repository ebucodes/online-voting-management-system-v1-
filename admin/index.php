<?php
  require_once 'conn.php';
  
  if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    
    $query = $conn->query("SELECT * FROM admin WHERE username =  '$username' AND password = '$password'") or die(mysql_error());
    $rows = $query->num_rows;
    $fetch = $query->fetch_array();
                                    
      if ($rows == 0) 
          {
           ?>
            <script type="text/javascript"> alert('Invalid login details');</script>
           <?php 
          } 
        else if ($rows > 0)
          {
          session_start();
          $_SESSION['admin_id'] = $fetch['admin_id'];
          header("location:dashboard.php");
        
      } 
  
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Alpha Voting System . Admin</title>
  
  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  
  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
  
    <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="css/style/floating-labels.css" rel="stylesheet">
  
  <!-- Icon fonts-->
  <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <form class="form-signin" method="POST" enctype="multipart/form-data" action="index.php">
    <?php if(isset($message)) { echo $message; } ?>
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <p class="lead">To get start on Alpha Voting System Admin Page, sign in</p>
    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" name="username" id="exampleInputusername1"  placeholder="Username">
      <label for="exampleInputusername1 row">Username</label>
    </div>

    <div class="form-label-group">
      <input type="password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" name="password" id="exampleInputPassword1" placeholder="Password">
      <label for="exampleInputPassword1">Password</label>
    </div>

        <div class="form-group row checkbox mb-3">
      <label for="remember-me">
        <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> /> Remember me
      </label>
  </div>

  <button class="btn btn-lg btn-info btn-block" name = "login" type="submit">Sign In</button>    
  </form>

</body>
</html>

