<?php
	require "./config.php";
	session_start(); 
	
	if(!isset($_SESSION['users_id'])){
		header("location:login.php");
	}else{
		$session_id=$_SESSION['users_id'];
		$user_query = $conn->query("SELECT * FROM users WHERE users_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
	}
?>