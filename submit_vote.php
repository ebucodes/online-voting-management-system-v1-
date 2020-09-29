<?php
	require("./config.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lwf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[rwf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[amf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cmf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[dmf]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cb_1]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cb_2]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[lb]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[rb]', '$_SESSION[users_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[gk]', '$_SESSION[users_id]')") or die(mysql_error());
		header("location:index.php");
		
?> 