<?php
	//include "./includes/connect.php";
	include 'connect.php';
	include 'FrontPage.php';

    $sql = "SELECT * FROM restaurants WHERE name LIKE '%". $_POST['search'] ."%'  OR location LIKE '%" . $_POST['search'] . "%'";
	$result = $conn->query($sql);

	if ($result) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	     	// header('location: FrontPage.php');
	         echo "<br> Restaurants: ". $row["name"]. "<br>";
	     }
	} else {
	     echo "0 results";
	}

?>