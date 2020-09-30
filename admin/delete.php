<?php
	include('conn.php');
	if (isset($_POST['deleteCandidate'])) {
			$id=$_GET['candidate_id'];
			mysqli_query($conn,"DELETE FROM candidate WHERE candidate_id='$id'");
			header('location:candidate.php');
		}
?>

<?php 
	if (isset($_POST['deleteAdmin'])) {
	$id=$_GET['admin_id'];
	mysqli_query($conn,"DELETE FROM admin WHERE admin_id='$id'");
	header('location:admin.php');
}
?>