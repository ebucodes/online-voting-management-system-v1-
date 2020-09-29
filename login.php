<?php
  session_start();
  //connection
  require('./config.php');
  
  // PHP query for login
  if(isset($_POST["login"])) {

  $email=$_POST['email_address'];
  $password=md5($_POST['password']);

  $query = "SELECT * FROM users WHERE email_address ='$email' AND password ='$password'";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);

  
  if($row) {
    $_SESSION["users_id"]= $row["users_id"];
  // To activate the "Remember me" option
      if(!empty($_POST["remember"])) {
        setcookie ("user_login",$_POST["email_address"],time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("user_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));

      } else {
        if(isset($_COOKIE["user_login"])) {
          setcookie ("user_login","");
        }
        if(isset($_COOKIE["user_password"])) {
          setcookie ("user_password","");
        }
      }
  header("Location:polls.php");

  } else {
    $message ="<h4 class='card-text alert alert-danger'>Incorrect email address/password</h4>" ;
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
  <title>Alpha Voting System</title>
  
  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  
  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
  
    <!-- Bootstrap core CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="css/style/floating-labels.css" rel="stylesheet">
  
  <!-- Icon fonts-->
  <link href="./assets/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <form class="form-signin" method="POST" enctype="multipart/form-data" action="./login.php">
    
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <?php if(isset($message)) { echo $message; } ?>
      <p class="lead">To get start on Alpha Voting Sysem, sign in</p>
    </div>

    <div class="form-label-group">
      <input type="email" class="form-control" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" name="email_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <label for="exampleInputEmail1 row">Email address</label>
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

