<?php
	 	include "connect.php";
	 
	 	$name = $_POST['name'];
	 	$location = $_POST['location'];
	 	$open = $_POST['open'];

	 	$name = mysqli_real_escape_string($conn, $name);
	 	$location = mysqli_real_escape_string($conn, $location);
	 	$open = mysqli_real_escape_string($conn, $open);

		$result = "INSERT INTO restaurants (name, location, open) VALUES('$name', '$location', '$open')" or die("Failed to query database ".mysqli_error($conn));

		if ($conn->query($result) === TRUE) {
		    header("Location: admin.php");
		} else {
		    echo "Error: " . $result . "<br>" . $conn->error;
		}
		
?>