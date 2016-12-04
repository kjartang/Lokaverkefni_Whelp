<?php

if (isset($_POST['nyskra'])) {
 include "connect.php";
 include "FrontPage.php";
 
	$sql = "INSERT INTO user (name, username, email, password) VALUES ('".$_POST["name"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";

	$data = mysqli_fetch_array($sql, MYSQLI_NUM);
	if($data[0] > 1) {
	    echo "User Already in Exists<br/>";
	}
	else if ($conn->query($sql) === TRUE) {
		header("location:LoggedIn.php ");
	    echo "New user created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>