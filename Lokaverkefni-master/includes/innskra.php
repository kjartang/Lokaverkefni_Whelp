<?php
	session_start();
 	include "connect.php";
	
	$_SESSION['username'] = $username;

 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$username = mysqli_real_escape_string($conn, $username);
 	$password = mysqli_real_escape_string($conn, $password);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username' AND password = '$password'") or die("Failed to query database ".mysqli_error($conn));

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password)
	{
		header("Location: ../LoggedIn.php");
	}
	else {
		echo "Failed to login!";
	}


?>