<?php
	require 'conn.php';
	session_start(); 
	
	if(!isset($_SESSION['admin_id'])){
		header("location:index.php");
	}else{
		$session_id=$_SESSION['admin_id'];
		$admin_query = $conn->query("SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_errno());
		$admin_row = $admin_query->fetch_array();
		$admin_username = $admin_row['firstname']." ".$admin_row['lastname'];
	}
?>