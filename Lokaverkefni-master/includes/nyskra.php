<?php
	 	if (isset($_POST["nyskra"])) {

		 	$name = $_POST['name'];
		 	$username = $_POST['username'];
		 	$email = $_POST['email'];
		 	$password = $_POST['password'];

		 	$name = mysqli_real_escape_string($conn, $name);
		 	$username = mysqli_real_escape_string($conn, $username);
		 	$email = mysqli_real_escape_string($conn, $email);
		 	$password = mysqli_real_escape_string($conn, $password);

			$result = "INSERT INTO user (name, username, email, password) VALUES('$name', '$username', '$email', '$password')" or die("Failed to query database ".mysqli_error($conn));

			if ($conn->query($result) === TRUE) {
				echo "<script type='text/javascript'>alert('Notandi skráður!')</script>";
			} else {
			    echo "Error: " . $result . "<br>" . $conn->error;
			}
		}

?>