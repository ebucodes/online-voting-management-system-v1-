<?php
	include('conn.php');
	
	if (isset($_POST['editCandidate'])) {
		$id=$_GET['candidate_id'];
	
		$position=$_POST['position'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$country=$_POST['country'];
		$club=$_POST['club'];

		$image = $_FILES['image']['name'];
		$target = "images/".basename($image);
		move_uploaded_file($_FILES['image']['tmp_name'], $target);

	mysqli_query($conn,"UPDATE candidate SET position='$position', firstname='$firstname', lastname='$lastname', country='$country', club='$club', img='$target' WHERE candidate_id='$id'");
	echo "<script> alert('Update successful'); </script>";
	header('location:candidate.php');
	
	}
	?>

	<?php
	if (isset($_POST['editAdmin'])) {
	
	$id=$_GET['admin_id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$password=$_POST['password'];

	mysqli_query($conn,"UPDATE admin SET firstname='$firstname', lastname='$lastname', username='$username', password='$password'WHERE admin_id='$id'");
	echo '<script> alert("Update successful"); </script>';
	header('location:admin.php'); 
	}
	?>

