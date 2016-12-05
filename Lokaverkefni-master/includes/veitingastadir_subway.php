<?php	
	include "connect.php";

	$sql = "SELECT id, name, open FROM restaurants WHERE name LIKE '%Subway%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<br> Heiti Staðar: ". $row["name"]. " - Opið frá: " . $row["open"] . "<br>";
	         echo '<a href="includes/subway.php" class="btn">Frekari upplýsingar</a>';

	     }
	} else {
	     echo "0 results";
	}
?>