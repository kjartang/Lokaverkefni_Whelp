<?php

session_start();
	if (isset($_POST["innskra"])) {

		
	 	$username = $_POST['username'];
	 	$password = $_POST['password'];

	 	$username = mysqli_real_escape_string($conn, $username);
	 	$password = mysqli_real_escape_string($conn, $password);
	 	
	 	$_SESSION['username'] = $username;

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username' AND password = '$password'") or die("Failed to query database ".mysqli_error($conn));

		$row = mysqli_fetch_array($result);
		if ("bjarkithor" == $username && "mypassword" == $password || "kjartang" == $username && "mypassword" == $password)
		{
			header("Location: includes/admin.php");
		}
		else if ($row['username'] = $username && $row['password'] == $password)
		{
			header("Location: LoggedIn.php");
		}
		else {
			echo "<script type='text/javascript'>alert('Rangar upplýsingar!')</script>";
		}

	}
?>
