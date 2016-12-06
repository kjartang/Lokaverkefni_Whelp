<?php
	$sql = "SELECT id, name, location, open FROM restaurants";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<br><input type='checkbox' name='checkboxID' id='checkboxID' class='form' value='" . $row["id"] . "' name='checkbox[]' /> ID: ". $row["id"]. " - Name: ". $row["name"]. " - " . $row["location"] . " - " . $row["open"] . "<br>";
	     }
	} else {
	     echo "No restaurants in Database";
	}
?>