<?php

	$sql = "SELECT id, name, open FROM restaurants";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["open"] . "<br>";
	     }
	} else {
	     echo "0 results";
	}
?>