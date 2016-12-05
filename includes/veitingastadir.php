<?php	
	include "connect.php";

	$sql = "SELECT name FROM restaurants";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<div class="container">                                        
					  <div class="dropdown">
					    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Veitingstaður
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">';
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	        //echo "<br> Heiti Staðar: ". $row["name"]. " - Opið frá: " . $row["open"] . "<br>";
					    echo '<li><a href="http://tsuts.tskoli.is/2t/2804963169/Lokaverkefni-master/includes/'.$row["name"].'.php">'. $row["name"] .'</a></li>';

	     }
	      echo '</ul>
			</div>
		</div>';
	} else {
	     echo "0 results";
	}
?>