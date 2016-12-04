<?php	
	include "connect.php";

	$sql = "SELECT id, name, open FROM restaurants WHERE name LIKE '%Roadhouse%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<br> Name: ". $row["name"]. " - Open: " . $row["open"] . "<br>";
	         echo '<a href="includes/roadhouse.php" class="btn">Fleiri upplýsingar</a>';

	     }
	} else {
	     echo "0 results";
	}
?>