<?php
	session_start();
	include 'connect.php';	

    $sql = "SELECT * FROM restaurants WHERE name LIKE '%". $_POST['search'] ."%'  OR location LIKE '%" . $_POST['search'] . "%'";
	$result = $conn->query($sql);

	if ($result) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	     	header("location:../FrontPage.php");
	         
	     }
	} else {
	     echo "0 results";
	}

	$sqli = "SELECT * FROM storedimages WHERE image_path LIKE '%" . $_POST['search'] . "%'";
	$resulti = $conn->query($sqli);
	$_SESSION["newsession"]= $sqli;

	if ($resulti->num_rows > 0) {
	     // output data of each row
	     while($row = $resulti->fetch_assoc()) {
	     	$_SESSION["newsession"] = $row["image_path"];
	     	header("location:../FrontPage.php");
	     }
	} else {
	     echo "0 results";
	} 	
?>