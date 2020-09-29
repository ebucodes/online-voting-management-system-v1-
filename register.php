<?php 
	
	require "./config.php";
// Query for registeration
	if (isset($_POST['register'])) {
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email_address=$_POST['email_address'];
		$password = $_POST['password'];

		$firstname = mysqli_real_escape_string($conn, $firstname);
		$lastname = mysqli_real_escape_string($conn, $lastname);
		$password = mysqli_real_escape_string($conn, $password);
		$password = md5($password);

		// To check if the user exists
		$sql = "SELECT email_address FROM users WHERE email_address='$email_address'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		if (mysqli_num_rows($result) == 1) {
		$message ="<div class='alert alert-dismissible alert-danger'>
  				   <button type='button' class='close' data-dismiss='alert'>&times;</button>
  				   <strong>Email address already in use. Please change it and try submitting again.</strong>
				   </div>" 			;
		}

		else{
			// To successfully register user
			$query =mysqli_query($conn,"INSERT INTO users(firstname, lastname, email_address, password) VALUES('$firstname', '$lastname','$email_address','$password')");

		if ($query) {
		$message ="<div class='alert alert-dismissible alert-success'>
  					<button type='button' class='close' data-dismiss='alert'>&times;</button>
        			<strong>Well done!</strong> You successfully registered <a href='index.php' class='alert-link'> Login to get started</a>.
                   </div>";
				header("Location: index.php");


		}
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
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="css/style/floating-labels.css" rel="stylesheet">
  
  <!-- Icon fonts-->
  <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form class="form-signin" method="POST" enctype="multipart/form-data" action="register.php">
		<div class="text-center mb-4">
			<h1 class="h3 mb-3 font-weight-normal">Registration Form</h1>
			<?php if(isset($message)) { echo $message; } ?>
		</div>

		<div class="form-label-group">
			<input type="text" name="firstname" class="form-control" placeholder="Enter your firstname" required autofocus>
			<label>Firstname</label>
		</div>

		<div class="form-label-group">
			<input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" required autofocus>
			<label>Lastname</label>
		</div>

		<div class="form-label-group">
			<input type="email" name="email_address" class="form-control" placeholder="Enter your email address" required autofocus>
			<label>Email address</label>
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>

		<div class="form-label-group">
			<input ype="password" name="password" class="form-control" placeholder="Password" required autofocus>
			<label>Password</label>
		</div>

		<button name = "register" type="submit" class="btn btn-lg btn-info btn-block">Sign Up</button> 		
	</form>
   </body>
   </html>
